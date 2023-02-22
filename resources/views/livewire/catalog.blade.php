@extends('layouts.app')

@section('page-title') Каталог курсов @endsection

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
                    <img src="{{asset('assets/img/catalog-banner.png')}}" alt="Изображение баннера">
                </div>
            </div>
        </div>
    </section>
    <section class="directions element-animation opacity-anim">
        <div class="container">
            <div class="directions-head">
                <div class="title">
                    <h2>Направления</h2>
                    <div class="line">
                    </div>
                </div>
                <div class="directions-head_category">
                    <a href="#" class="active">Базовый</a>
                    <a href="#">Средний </a>
                    <a href="#">Профи</a>
                </div>
            </div>
            <div class="directions-category">
                <div class="directions-category__main">
                    <a href="" class="active">Все</a>
                    <a href="">Программирования</a>
                    <a href="">Верстка</a>
                    <a href="">Дизайн</a>
                </div>
                <div class="directions-category__all-course">
                    Всего курсов: 9
                </div>
            </div>
            <div class="directions-courses">
                <div class="best-course__item">
                    <div class="best-course__info">
                        <div class="best-course__text">
                            <div class="type">
                                Профи
                            </div>
                            <div class="name">
                                Веб-дизайн
                            </div>
                            <div class="cat">
                                Входит в состав курса “Веб разработка”
                            </div>
                        </div>
                        <div class="best-course__img">
                            <img src="{{asset('assets/img/c3.png')}}" alt="Изображение курса">
                        </div>
                    </div>
                    <div class="best-course__lessons">
                        <div class="best-course__time">
                            <div class="catalog-lesson">
                                12 уроков
                            </div>
                            <div class="time">
                                2 очных занятия
                            </div>
                        </div>
                        <a href="#" class="arrow">
                            Подробнее
                            <img src="{{asset('assets/img/arrow2.png')}}" alt="Стрелка подробнее">
                        </a>
                    </div>
                </div>
                <div class="best-course__item">
                    <div class="best-course__info">
                        <div class="best-course__text">
                            <div class="type">
                                Профи
                            </div>
                            <div class="name">
                                Веб-дизайн
                            </div>
                            <div class="cat">
                                Входит в состав курса “Веб разработка”
                            </div>
                        </div>
                        <div class="best-course__img">
                            <img src="assets/img/c3.png" alt="">
                        </div>
                    </div>
                    <div class="best-course__lessons">
                        <div class="best-course__time">
                            <div class="catalog-lesson">
                                12 уроков
                            </div>
                            <div class="time">
                                2 очных занятия
                            </div>
                        </div>
                        <a href="#" class="arrow">
                            Подробнее
                            <img src="assets/img/arrow2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="best-course__item">
                    <div class="best-course__info">
                        <div class="best-course__text">
                            <div class="type">
                                Профи
                            </div>
                            <div class="name">
                                Веб-дизайн
                            </div>
                            <div class="cat">
                                Входит в состав курса “Веб разработка”
                            </div>
                        </div>
                        <div class="best-course__img">
                            <img src="assets/img/c3.png" alt="">
                        </div>
                    </div>
                    <div class="best-course__lessons">
                        <div class="best-course__time">
                            <div class="catalog-lesson">
                                12 уроков
                            </div>
                            <div class="time">
                                2 очных занятия
                            </div>
                        </div>
                        <a href="#" class="arrow">
                            Подробнее
                            <img src="assets/img/arrow2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="best-course__item">
                    <div class="best-course__info">
                        <div class="best-course__text">
                            <div class="type">
                                Профи
                            </div>
                            <div class="name">
                                Веб-дизайн
                            </div>
                            <div class="cat">
                                Входит в состав курса “Веб разработка”
                            </div>
                        </div>
                        <div class="best-course__img">
                            <img src="assets/img/c3.png" alt="">
                        </div>
                    </div>
                    <div class="best-course__lessons">
                        <div class="best-course__time">
                            <div class="catalog-lesson">
                                12 уроков
                            </div>
                            <div class="time">
                                2 очных занятия
                            </div>
                        </div>
                        <a href="#" class="arrow">
                            Подробнее
                            <img src="assets/img/arrow2.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection('content')
