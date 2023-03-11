<?php

namespace App\Http\Livewire\Lesson;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function add() {
        return view('livewire.admin.lesson.add');
    }
}
