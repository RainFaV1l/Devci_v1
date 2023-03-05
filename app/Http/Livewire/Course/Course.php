<?php

namespace App\Http\Livewire\Course;

use App\Models\Course as ModelsCourse;
use App\Models\CourseCategory;
use Livewire\Component;

class Course extends Component
{
    public $categories;
    public $courses;

    public function render()
    {
        $this->categories = CourseCategory::all();
        $this->courses = ModelsCourse::all();
        return view('livewire.course.course', ['categories', 'courses']);
    }
}
