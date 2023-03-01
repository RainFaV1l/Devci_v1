<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{

    public function render()
    {
        return view('livewire.admin.course.add');
    }

    public Course $course;

    public $name, $price, $author, $course_category_id, $description, $course_icon_path, $course_banner_path;

    protected $rulers = [
        'name' => ['required', 'string', 'unique:courses,name'],
        'price' => ['required', 'numeric'],
        'author' => ['required', 'numeric'],
        'course_category_id' => ['required', 'numeric'],
        'description' => ['required', 'text'],
        'course_icon_path' => ['required', 'image', 'mimes:img,png,svg,jpg,jpeg'],
        'course_banner_path' => ['required', 'image', 'mimes:img,png,svg,jpg,jpeg'],
    ];


    public function store() {
        $validated = $this->validate([
            'name' => ['required', 'string', 'unique:courses,name'],
            'price' => ['required', 'numeric'],
            'author' => ['required', 'numeric'],
            'course_category_id' => ['required', 'numeric'],
            'description' => ['required', 'text'],
            'course_icon_path' => ['required', 'image', 'mimes:img,png,svg,jpg,jpeg'],
            'course_banner_path' => ['required', 'image', 'mimes:img,png,svg,jpg,jpeg'],
        ]);

        $this->course_icon_path->store('courses');
        $this->course_banner_path->store('courses');
        $this->course->create($validated);
    }
}
