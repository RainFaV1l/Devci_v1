<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseLevel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{

    public function add()
    {
        $users = User::all();
        $categories = CourseCategory::all();
        $levels = CourseLevel::all();
        return view('livewire.admin.course.add', compact('categories', 'users', 'levels'));
    }

    public function more($id)
    {
        $course = Course::find($id);
        return view('livewire.course.one-course-learn', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::find($id);
        $users = User::all();
        $categories = CourseCategory::all();
        $levels = CourseLevel::all();
        return view('livewire.admin.course.edit', compact('categories', 'users', 'course', 'levels'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'author' => ['required', 'numeric'],
            'course_category_id' => ['required', 'numeric'],
            'course_level_id' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'course_icon_path' => ['required', 'image', 'max:5120'],
//            'course_banner_path' => ['required', 'image', 'max:5120'],
        ], [
            'avatar.mimes' => 'Разрешенные форматы: jpeg,png,jpg,svg.',
            'avatar.max' => 'Максимальный размер 5 мб.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        if ($request->file('course_icon_path')) {
            $validated['course_icon_path'] = $request->file('course_icon_path')->store('public/courses');
//            $validated['course_banner_path'] = $request->file('course_banner_path')->store('public/images');
        }

        Course::query()->create($validated);

        return redirect(route('dashboard.courses'));
    }
}
