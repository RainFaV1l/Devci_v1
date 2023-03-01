@extends('layouts.app-dashboard')

@section('page-title') Добавление категории @endsection

@section('content')
    <section class="admin-panel panel">
        <div class="container">
            <div class="content">
                <div class="title-two">
                    <div class="text">
                        <h1>Добавление категории</h1>
                        <p>Страница добавления категории</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="add-course__form add-course-form">

                    <form action="{{ route('courses.categoryAdd') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input wire:model="name" type="text" name="name" class="add-course-form__input" placeholder="Название">
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
