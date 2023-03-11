@extends('layouts.app-dashboard')

@section('page-title')
    Админ панель
@endsection

@section('content')
    <section class="admin-panel panel">
        <div class="container">
            <div class="content">
                <div class="title-two">
                    <div class="text">
                        <h1>Редактирование курса</h1>
                        <p>Страница редактирования курса</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="add-course__form add-course-form">
                    @livewire('course.course-update', ['categories' => $categories, 'users' => $users, 'course' => $course, 'levels' => $levels])
                </div>
            </div>
        </div>
    </section>
@endsection('content')
