@extends('layouts.app')

@section('page-title')
    Каталог курсов
@endsection

@section('content')
    <section class="catalog-banner element-animation opacity-anim">
        <div class="container">
            <div class="catalog-banner__wrapper">
                <div class="catalog-banner__info">
                    <div class="catalog-banner__head">
                        Главная / Каталог
                    </div>
                    <div class="catalog-banner__main">
                        <div class="catalog-banner__title">
                            Каталог курсов
                        </div>
                        <div class="catalog-banner__text">
                            Начни учить веб-разработку прямо сейчас!
                        </div>
                    </div>
                </div>
                <div class="catalog-banner__img">
                    <img src="{{ asset('assets/img/catalog-banner.png') }}" alt="Изображение баннера">
                </div>
            </div>
        </div>
    </section>
    @livewire('course.course')
@endsection('content')
