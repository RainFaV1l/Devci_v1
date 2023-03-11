<?php

namespace App\Http\Livewire\Course;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CourseSubscribe extends Component
{
    public $course_id;

    public function render()
    {
        return view('livewire.course.course-subscribe');
    }

    public function subscribe()
    {
        if (isset(Auth::user()->id)) {
            
        }
    }
}
