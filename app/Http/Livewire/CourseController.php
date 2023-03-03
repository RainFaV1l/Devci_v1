<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{

    public function showCourse($id)
    {
        return $id;
    }

    public function add()
    {
        $users = User::all();
        $categories = CourseCategory::all();
        return view('livewire.admin.course.add', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'author' => ['required', 'numeric'],
            'course_category_id' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'course_icon_path' => ['required', 'mimes:jpeg,png,jpg,svg', 'max:5120'],
            'course_banner_path' => ['required', 'mimes:jpeg,png,jpg,svg', 'max:5120'],
        ], [
            'avatar.mimes' => 'Разрешенные форматы: jpeg,png,jpg,svg.',
            'avatar.max' => 'Максимальный размер 5 мб.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        if ($request->file('course_icon_path') && $request->file('course_banner_path')) {
            $validated['course_icon_path'] = $request->file('course_icon_path')->store('courses', 'public');
            $validated['course_banner_path'] = $request->file('course_banner_path')->store('courses', 'public');
        }

        Course::query()->create($validated);

        return redirect(route('dashboard.courses'));
    }
}
