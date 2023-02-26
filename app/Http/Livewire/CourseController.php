<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showCourse($id)
    {
        return $id;
    }
}
