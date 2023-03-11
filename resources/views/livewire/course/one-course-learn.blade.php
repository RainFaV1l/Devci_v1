@extends('layouts.app')

@section('page-title')
    Страница курса
@endsection

@section('paddin-none')
    paddin-none
@endsection

@section('content')
    <section class="one-course">
        <div class="container">
            <div class="content">
                <div class="title-two">
                    <div class="text">
                        <h1>{{ $course->author()['name'] }}</h1>
                        <p>{{ $course->level()['name'] }} курс</p>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="one-course-banner">
                    <div class="one-course__banner">
                        <div class="one-course__logo">Devci</div>
                        <div class="one-course__banner-info">
                            <div class="one-course__name">
                                <h1>{{ $course->name }}</h1>
                                <div class="text">
                                    {{ $course->level()['name'] }} курс
                                </div>
                            </div>
                            <div class="author">
                                <div class="author__ava">
                                    @if (!$course->author()->user_url)
                                        <img src="{{ $course->author()->user_url }}" alt="Аватарка автора">
                                    @else
                                        <img src="{{ asset('assets/avatar/gamer.png') }}" alt="Аватарка автора">
                                    @endif
                                </div>
                                <div class="author__name">
                                    <div class="name">{{ $course->author()->name . $course->author()->surname }}</div>
                                    <div class="post">Ведущий Frontend-разработчик Pautina</div>
                                </div>
                            </div>
                        </div>
                        <div class="one-course__banner-img">
                            <img src="{{ asset('assets/img/one-course-remove-bg.png') }}" alt="Изображение">
                        </div>
                    </div>
                </div>
                <div class="one-course__nav">
                    <div class="category-nav">
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id === 1)
                            <a href="" class="active">Все</a>
                            <a href="">Завершенные</a>
                        @elseif(\Illuminate\Support\Facades\Auth::user()->role_id === 2)
                            <a href="" class="active">Все</a>
                            <a href="">Завершенные</a>
                        @elseif(\Illuminate\Support\Facades\Auth::user()->role_id === 3)
                            <a href="" class="blueFill__button">Завершить курс</a>
                            <a href="{{ route('lessons.add') }}" class="darkerBlueFill__button">Добавить урок</a>
                        @endif
                    </div>
                    <div class="courses">
                        Всего уроков: 9
                    </div>
                </div>
                <div class="progress-bar">
                    <div class="progress-bar__meaning">
                        <p>Прогресс:</p>
                        <div class="meaning">30%</div>
                    </div>
                    <div class="scale">
                        <div class="scale__item"></div>
                    </div>
                </div>
                <div class="one-course__course-wrapper">
                    <div class="courses__item">
                        <div class="one">
                            <div class="name">
                                <p>Базовый</p>
                                <h2>HTML+CSS</h2>
                            </div>
                            <div class="play">
                                <div class="continue">
                                    <a href="#" class="play-button">
                                        <img src="assets/img/play.png" alt="">
                                    </a>
                                    <div class="text">
                                        <p>Вы остановились на уроке</p>
                                        <div class="number-course">1. Введение в курс</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="two">
                            <div class="lessons">
                                <div class="item">
                                    <img src="assets/img/mini-play.svg" alt="">
                                    <p>Пройдено 3 / 12 уроков</p>
                                </div>

                            </div>
                            <div class="continue-training">
                                <p>Продолжить обучение</p>
                                <img src="assets/img/arrow2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="one-course__wrapper">
                    <div class="program-themes__item ">
                        <div class="program-themes__wrapper">
                            <div class="info">
                                <div class="circle "></div>
                                <div class="name">3. Псевдоклассы</div>

                            </div>
                            <div class="program-theme__end">
                                <div class="status">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" width="35" height="35" rx="17.5" fill="#51C853" />
                                        <path d="M16.5 22.4L12.5 18.4L13.9 17L16.5 19.6L23.1 13L24.5 14.4L16.5 22.4Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="play">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="18" cy="17.5" r="17.5" fill="#6C63FF"
                                            class="play-fill" />
                                        <path
                                            d="M24 18.366C24.6667 17.9811 24.6667 17.0189 24 16.634L15.75 11.8708C15.0833 11.4859 14.25 11.9671 14.25 12.7369V22.2631C14.25 23.0329 15.0833 23.5141 15.75 23.1292L24 18.366Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="arrow ">
                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.38557 1.22386C2.89539 0.723678 2.08997 0.723751 1.59988 1.22402L1.50696 1.31887C1.03081 1.80492 1.03087 2.58253 1.5071 3.0685L9.08105 10.7975C9.56251 11.2888 10.3505 11.2988 10.8442 10.8199L18.8338 3.06946C19.331 2.58711 19.3411 1.79237 18.8563 1.2975L18.7597 1.1989C18.28 0.709176 17.4953 0.69724 17.0009 1.17214L10.4968 7.41943C10.2002 7.70434 9.72948 7.69722 9.44162 7.40348L3.38557 1.22386Z"
                                            fill="#6C63FF" class="arcol" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="about ">
                            Научитесь править код веб-страниц и верстать целые блоки с нуля.
                        </div>
                    </div>
                    <div class="program-themes__item ">
                        <div class="program-themes__wrapper">
                            <div class="info">
                                <div class="circle "></div>
                                <div class="name">3. Псевдоклассы</div>

                            </div>
                            <div class="program-theme__end">
                                <div class="status">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" width="35" height="35" rx="17.5"
                                            fill="#51C853" />
                                        <path d="M16.5 22.4L12.5 18.4L13.9 17L16.5 19.6L23.1 13L24.5 14.4L16.5 22.4Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="play">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="18" cy="17.5" r="17.5" fill="#6C63FF"
                                            class="play-fill" />
                                        <path
                                            d="M24 18.366C24.6667 17.9811 24.6667 17.0189 24 16.634L15.75 11.8708C15.0833 11.4859 14.25 11.9671 14.25 12.7369V22.2631C14.25 23.0329 15.0833 23.5141 15.75 23.1292L24 18.366Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="arrow ">
                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.38557 1.22386C2.89539 0.723678 2.08997 0.723751 1.59988 1.22402L1.50696 1.31887C1.03081 1.80492 1.03087 2.58253 1.5071 3.0685L9.08105 10.7975C9.56251 11.2888 10.3505 11.2988 10.8442 10.8199L18.8338 3.06946C19.331 2.58711 19.3411 1.79237 18.8563 1.2975L18.7597 1.1989C18.28 0.709176 17.4953 0.69724 17.0009 1.17214L10.4968 7.41943C10.2002 7.70434 9.72948 7.69722 9.44162 7.40348L3.38557 1.22386Z"
                                            fill="#6C63FF" class="arcol" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="about ">
                            Научитесь править код веб-страниц и верстать целые блоки с нуля.
                        </div>
                    </div>
                    <div class="program-themes__item ">
                        <div class="program-themes__wrapper">
                            <div class="info">
                                <div class="circle "></div>
                                <div class="name">3. Псевдоклассы</div>

                            </div>
                            <div class="program-theme__end">
                                <div class="status">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" width="35" height="35" rx="17.5"
                                            fill="#51C853" />
                                        <path d="M16.5 22.4L12.5 18.4L13.9 17L16.5 19.6L23.1 13L24.5 14.4L16.5 22.4Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="play">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="18" cy="17.5" r="17.5" fill="#6C63FF"
                                            class="play-fill" />
                                        <path
                                            d="M24 18.366C24.6667 17.9811 24.6667 17.0189 24 16.634L15.75 11.8708C15.0833 11.4859 14.25 11.9671 14.25 12.7369V22.2631C14.25 23.0329 15.0833 23.5141 15.75 23.1292L24 18.366Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="arrow ">
                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.38557 1.22386C2.89539 0.723678 2.08997 0.723751 1.59988 1.22402L1.50696 1.31887C1.03081 1.80492 1.03087 2.58253 1.5071 3.0685L9.08105 10.7975C9.56251 11.2888 10.3505 11.2988 10.8442 10.8199L18.8338 3.06946C19.331 2.58711 19.3411 1.79237 18.8563 1.2975L18.7597 1.1989C18.28 0.709176 17.4953 0.69724 17.0009 1.17214L10.4968 7.41943C10.2002 7.70434 9.72948 7.69722 9.44162 7.40348L3.38557 1.22386Z"
                                            fill="#6C63FF" class="arcol" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="about ">
                            Научитесь править код веб-страниц и верстать целые блоки с нуля.
                        </div>
                    </div>
                    <div class="program-themes__item ">
                        <div class="program-themes__wrapper">
                            <div class="info">
                                <div class="circle"></div>
                                <div class="name">3. Псевдоклассы</div>

                            </div>
                            <div class="program-theme__end">
                                <div class="status">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="18" cy="17.5" r="17.5" fill="#FCD425" />
                                        <line x1="13.5" y1="11.5" x2="13.5" y2="23.5"
                                            stroke="white" stroke-width="3" stroke-linecap="round" />
                                        <line x1="21.5" y1="11.5" x2="21.5" y2="23.5"
                                            stroke="white" stroke-width="3" stroke-linecap="round" />
                                    </svg>


                                </div>
                                <div class="play">
                                    <svg width="36" height="35" viewBox="0 0 36 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="18" cy="17.5" r="17.5" fill="#6C63FF"
                                            class="play-fill active" />
                                        <path
                                            d="M24 18.366C24.6667 17.9811 24.6667 17.0189 24 16.634L15.75 11.8708C15.0833 11.4859 14.25 11.9671 14.25 12.7369V22.2631C14.25 23.0329 15.0833 23.5141 15.75 23.1292L24 18.366Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="arrow ">
                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.38557 1.22386C2.89539 0.723678 2.08997 0.723751 1.59988 1.22402L1.50696 1.31887C1.03081 1.80492 1.03087 2.58253 1.5071 3.0685L9.08105 10.7975C9.56251 11.2888 10.3505 11.2988 10.8442 10.8199L18.8338 3.06946C19.331 2.58711 19.3411 1.79237 18.8563 1.2975L18.7597 1.1989C18.28 0.709176 17.4953 0.69724 17.0009 1.17214L10.4968 7.41943C10.2002 7.70434 9.72948 7.69722 9.44162 7.40348L3.38557 1.22386Z"
                                            fill="#6C63FF" class="arcol" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="about ">
                            Научитесь править код веб-страниц и верстать целые блоки с нуля.
                        </div>
                    </div>
                    <div class="program-themes__item none">
                        <div class="program-themes__wrapper">
                            <div class="info">
                                <div class="circle none"></div>
                                <div class="name">3. Псевдоклассы</div>

                            </div>
                            <div class="program-theme__end">
                                <div class="arrow none">
                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.38557 1.22386C2.89539 0.723678 2.08997 0.723751 1.59988 1.22402L1.50696 1.31887C1.03081 1.80492 1.03087 2.58253 1.5071 3.0685L9.08105 10.7975C9.56251 11.2888 10.3505 11.2988 10.8442 10.8199L18.8338 3.06946C19.331 2.58711 19.3411 1.79237 18.8563 1.2975L18.7597 1.1989C18.28 0.709176 17.4953 0.69724 17.0009 1.17214L10.4968 7.41943C10.2002 7.70434 9.72948 7.69722 9.44162 7.40348L3.38557 1.22386Z"
                                            fill="#6C63FF" class="arcol none" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="about ">
                            Научитесь править код веб-страниц и верстать целые блоки с нуля.
                        </div>
                    </div>
                    <div class="program-themes__item none">
                        <div class="program-themes__wrapper">
                            <div class="info">
                                <div class="circle none"></div>
                                <div class="name">3. Псевдоклассы</div>

                            </div>
                            <div class="program-theme__end">
                                <div class="arrow none">
                                    <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.38557 1.22386C2.89539 0.723678 2.08997 0.723751 1.59988 1.22402L1.50696 1.31887C1.03081 1.80492 1.03087 2.58253 1.5071 3.0685L9.08105 10.7975C9.56251 11.2888 10.3505 11.2988 10.8442 10.8199L18.8338 3.06946C19.331 2.58711 19.3411 1.79237 18.8563 1.2975L18.7597 1.1989C18.28 0.709176 17.4953 0.69724 17.0009 1.17214L10.4968 7.41943C10.2002 7.70434 9.72948 7.69722 9.44162 7.40348L3.38557 1.22386Z"
                                            fill="#6C63FF" class="arcol" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="about ">
                            Научитесь править код веб-страниц и верстать целые блоки с нуля.
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
