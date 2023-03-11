<?php

namespace App\Http\Livewire\Course;

use App\Models\Course as CourseAlias;
use App\Models\CourseCategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CourseUpdate extends Component
{
    use WithFileUploads;

    public $users;
    public $categories;
    public $course;
    public $levels;

    public $name;
    public $price;
    public $author;
    public $course_category_id;
    public $course_level_id;
    public $description;
    public $course_icon_path;
    public $course_banner_path;

    protected $rules = [
        'name' => ['required', 'string'],
        'price' => ['required', 'numeric', 'max:1000000'],
        'author' => ['required', 'numeric'],
        'course_category_id' => ['required', 'numeric'],
        'course_level_id' => ['required', 'numeric'],
        'description' => ['required', 'string'],
    ];

    public function update($id)
    {
        $validated = $this->validate($this->rules);

        if ($this->course_icon_path) {
            $validated['course_icon_path']  = $this->validate([
                'course_icon_path' => ['required', 'image', 'max:5120'],
            ]);
//            $validated['course_banner_path'] = $this->course_icon_path->store('public/images');
        }

        if ($this->course_banner_path) {
            $validated['course_banner_path']  = $this->validate([
                'course_banner_path' => ['required', 'image', 'max:5120'],
            ]);
//            $validated['course_banner_path'] = $this->course_banner_path->store('public/images');
        }

        CourseAlias::query()->where('id', '=', $id)->update($validated);
    }

    public function render()
    {
        $this->users = User::all();
        $this->categories = CourseCategory::all();
        return view('livewire.admin.course.editForm', ['users' => $this->users, 'categories' => $this->categories, 'course' => $this->course, 'levels' => $this->levels]);
    }

    public function mount()
    {
        $this->name = $this->course->name;
        $this->price = $this->course->price;
        $this->author = $this->course->author;
        $this->course_category_id = $this->course->course_category_id;
        $this->course_level_id = $this->course->course_level_id;
        $this->description = $this->course->description;
        //        $this->course_icon_path = $this->course->course_icon_path;
        //        $this->course_banner_path = $this->course->course_banner_path;
    }
}
