@extends('layouts.app-dashboard')

@section('page-title') Добавление группы @endsection

@section('content')
    <section class="admin-panel panel">
        <div class="container">
            <div class="content">
                <div class="title-two">
                    <div class="text">
                        <h1>Добавление группы</h1>
                        <p>Страница добавления группы</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="add-course__form add-course-form">

                    <form action="{{ route('groups.store') }}" method="post">
                        @csrf
                        <select name="teacher_id" class="add-course-form__input add-course-form__select">
                            <option value="0" selected disabled>Преподаватель</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher['id'] }}">{{ \App\Models\User::getFioByValue($teacher['surname'], $teacher['name'], $teacher['patronymic']) }}</option>
                            @endforeach
                        </select>
                        @error('course_category_id') {{ $message }} @enderror
                        <input type="text" name="name" class="add-course-form__input" placeholder="Название">
                        @error('name') {{ $message }} @enderror
                        <div class="add-course-column-button">
                            <button type="submit" class="button">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection('content')
