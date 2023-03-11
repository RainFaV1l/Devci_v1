<?php

namespace App\Http\Livewire\Course;

use App\Models\Course as ModelsCourse;
use App\Models\CourseCategory;
use App\Models\CourseLevel;
use Livewire\Component;

class Course extends Component
{
    public $categories;
    public $courses;
    public $author;
    public $course_levels;

    public function render()
    {
        $this->categories = CourseCategory::all();
        $this->courses = ModelsCourse::all();
        $this->course_levels = CourseLevel::all();
        return view('livewire.course.course', ['categories', 'courses', 'course_levels']);
    }
}
