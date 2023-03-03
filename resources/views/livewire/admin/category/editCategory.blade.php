@extends('layouts.app-dashboard')

@section('page-title') Добавление категории @endsection

@section('content')
    <section class="admin-panel panel">
        <div class="container">
            <div class="content">
                <div class="title-two">
                    <div class="text">
                        <h1>Редактирование категории</h1>
                        <p>Страница редактирования категории</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="add-course__form add-course-form">
                    <form action="{{ route('categories.categoryEdit', $category['id']) }}" method="post">
                        @csrf
                        <input wire:model="name" value="{{ $category['name'] }}" type="text" name="name" class="add-course-form__input" placeholder="Название">
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
