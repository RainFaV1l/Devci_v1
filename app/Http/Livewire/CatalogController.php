<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('livewire.catalog');
    }

    public function show($id)
    {
        $course = Course::find($id);
        return view('livewire.course.one-course', compact('course'));
    }
}
