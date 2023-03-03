@extends('layouts.app-dashboard')

@section('page-title') Добавление группы @endsection

@section('content')
    <section class="admin-panel panel">
        <div class="container">
            <div class="content">
                <div class="title-two">
                    <div class="text">
                        <h1>Редактирование группы</h1>
                        <p>Страница редактирования группы</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="add-course__form add-course-form">

                    <form action="{{ route('groups.update', $group) }}" method="post">
                        @csrf
                        <select name="teacher_id" class="add-course-form__input add-course-form__select">
                            <option value="0" selected disabled>Преподаватель</option>
                            @foreach($teachers as $teacher)
                                <option
                                    @if($group->teacher_id === $teacher['id'])
                                    selected
                                    @endif
                                    value="{{ $teacher['id'] }}">{{ \App\Models\User::getFioByValue($teacher['surname'], $teacher['name'], $teacher['patronymic']) }}</option>
                            @endforeach
                        </select>
                        @error('course_category_id') {{ $message }} @enderror
                        <input type="text" name="name" class="add-course-form__input" placeholder="Название" value="{{ $group['name'] }}">
                        @error('name') {{ $message }} @enderror
                        <div class="add-course-column-button">
                            <button type="submit" class="button">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection('content')
