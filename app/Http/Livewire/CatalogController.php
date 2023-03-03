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
        $courses = Course::all();
        $categories = CourseCategory::all();
        return view('livewire.catalog', compact('courses', 'categories'));
    }
}
