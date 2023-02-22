@extends('layouts.app')

@section('page-title') Каталог курсов @endsection

@section('content')
    <section class="direction-banner">
        <div class="container">
            <div class="direction-banner__wrapper">
                <div class="direction-banner__head">
                    Главная / Каталог / HTML + CSS
                </div>
                <div class="direction-banner__main">
                    <div class="direction-banner__info">
                        <div class="direction-banner__title">
                            HTML + CSS
                        </div>
                        <div class="direction-banner__text">
                            Знание HTML и CSS помогут вам в верстке и адаптации веб-страниц любой сложности, а
                            методология БЭМ позволит профессионально называть и использовать классы в CSS.
                        </div>
                        <a href="#" class="button">Записаться</a>
                    </div>
                    <div class="direction-banner__img">
                        <img src="assets/img/direction-banner.png" alt="">
                    </div>
                </div>
                <div class="direction-banner__end">
                    <div class="direction-banner__lessons">
                        <p>Уровень - Профи</p>
                        <p>12 уроков</p>
                        <p>2 очных занятия</p>
                    </div>
                    <div class="direction-banner__creator">
                        Автор курса: Зарипов Эмиль
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="proposal">
        <div class="container">
            <div class="title">
                <h2>Что мы предлогаем?</h2>
                <div class="line"></div>
            </div>
            <div class="proposal-wrapper">
                <div class="proposal__item">
                    <div class="img">
                        <img src="assets/img/p1.png" alt="">
                    </div>
                    <h3>Работа с куратором</h3>
                    <p>Курсы предусматривают очные встречи с куратороми для объяснения темы</p>
                </div>
                <div class="proposal__item">
                    <div class="img">
                        <img src="assets/img/p2.png" alt="">
                    </div>
                    <h3>Открытый доступ</h3>
                    <p>Мы гарантируем неограниченный доступ к купленным вами
                        курсам.</p>
                </div>
                <div class="proposal__item">
                    <div class="img">
                        <img src="assets/img/p3.png" alt="">
                    </div>
                    <h3>Много практики</h3>
                    <p>Мы используем практический метод обучения. Меньше лекций, больше практики!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="how">
        <div class="container">
            <div class="title">
                <h2>Как проходит обучение?</h2>
                <div class="line line1"></div>
            </div>
            <div class="how-wrapper">
                <div class="how__info">
                    <div class="how__item">
                        <div class="number">
                            01
                        </div>
                        <h3>Выбрать направление</h3>
                        <p>Во первых, необходимо определиться с выбором направления. Это можно сделать
                            самостоятельно в сети интернет или обратиться к нашим специалистам.
                        </p>
                    </div>
                    <div class="how__item">
                        <div class="number">
                            02
                        </div>
                        <h3>Авторизоваться</h3>
                        <p>Для записи на курс необходиом авторизоваться на сайте. Авторизация проходит наиболее
                            удобным для пользователя образом.
                        </p>
                    </div>
                    <div class="how__item">
                        <div class="number">
                            03
                        </div>
                        <h3>Подать заявку</h3>
                        <p>Для выбора направления необходимо подать заявку, заполнив форму подачи заявки некоторыми
                            данными и подождать одобрение заявки.
                        </p>
                    </div>
                    <div class="how__item">
                        <div class="number">
                            04
                        </div>
                        <h3>Начать обучение</h3>
                        <p>Остается только просмотреть курс и решить задачи, которые максимально близки к реальным
                            задачам и загрузить решения на сервер.
                        </p>
                    </div>
                </div>
                <div class="how__img">
                    <img src="assets/img/how.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="program">
        <div class="container">
            <div class="title">
                <h2>Программа обучения</h2>
                <div class="line"></div>
            </div>
            <div class="program-lessons">
                <p><span>12</span> уроков</p>
                <p><span>2</span> очных занятия</p>
            </div>
            <div class="program-themes">
                <div class="program-themes__item ">
                    <div class="program-themes__wrapper">
                        <div class="info">
                            <div class="circle "></div>
                            <div class="name">1. Знакомство с курсом</div>

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
                    <div class="about ">
                        Научитесь править код веб-страниц и верстать целые блоки с нуля.
                    </div>
                </div>
                <div class="program-themes__item ">
                    <div class="program-themes__wrapper">
                        <div class="info">
                            <div class="circle "></div>
                            <div class="name">2. Методология БЭМ</div>

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
                        <div class="arrow ">
                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.38557 1.22386C2.89539 0.723678 2.08997 0.723751 1.59988 1.22402L1.50696 1.31887C1.03081 1.80492 1.03087 2.58253 1.5071 3.0685L9.08105 10.7975C9.56251 11.2888 10.3505 11.2988 10.8442 10.8199L18.8338 3.06946C19.331 2.58711 19.3411 1.79237 18.8563 1.2975L18.7597 1.1989C18.28 0.709176 17.4953 0.69724 17.0009 1.17214L10.4968 7.41943C10.2002 7.70434 9.72948 7.69722 9.44162 7.40348L3.38557 1.22386Z"
                                    fill="#6C63FF" class="arcol" />
                            </svg>
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
                            <div class="name">4. Псевдоэлементы</div>

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
                    <div class="about ">
                        Научитесь править код веб-страниц и верстать целые блоки с нуля.
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="reviews section-padding">
        <div class="container">
            <div class="title">
                <h2>Отзыв на курс</h2>
                <div class="line line1"></div>
            </div>
            <div class="score">
                <p>Средняя оценка курса 4,4 из 5</p>
                <img src="assets/img/star.svg" alt="">
            </div>
        </div>
        <div class="reviews-slider__wrapper">
            <div class="swiper reviews-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="text">
                            “Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше
                            своим
                            внешним видом вызывала лишь ужас и полное непонимание. Сама платформа очень удобная,
                            всегда
                            можно задать вопрос. “
                        </div>
                        <div class="user">
                            <div class="ava">
                                <img src="assets/avatar/user.png" alt="">
                            </div>
                            <div class="name">
                                Альфис Мусин
                            </div>
                            <div class="rating">
                                <img src="assets/img/stars.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text">
                            “Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше
                            своим
                            внешним видом вызывала лишь ужас и полное непонимание. Сама платформа очень удобная,
                            всегда
                            можно задать вопрос. “
                        </div>
                        <div class="user">
                            <div class="ava">
                                <img src="assets/avatar/user.png" alt="">
                            </div>
                            <div class="name">
                                Альфис Мусин
                            </div>
                            <div class="rating">
                                <img src="assets/img/stars.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text">
                            “Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше
                            своим
                            внешним видом вызывала лишь ужас и полное непонимание. Сама платформа очень удобная,
                            всегда
                            можно задать вопрос. “
                        </div>
                        <div class="user">
                            <div class="ava">
                                <img src="assets/avatar/user.png" alt="">
                            </div>
                            <div class="name">
                                Альфис Мусин
                            </div>
                            <div class="rating">
                                <img src="assets/img/stars.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text">
                            “Курс на 100% соответствует своему названию! Я быстро освоил программу, которая раньше
                            своим
                            внешним видом вызывала лишь ужас и полное непонимание. Сама платформа очень удобная,
                            всегда
                            можно задать вопрос. “
                        </div>
                        <div class="user">
                            <div class="ava">
                                <img src="assets/avatar/user.png" alt="">
                            </div>
                            <div class="name">
                                Альфис Мусин
                            </div>
                            <div class="rating">
                                <img src="assets/img/stars.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-buttons">
                    <div class="prev">
                        <img src="assets/img/prev.png" alt="">
                    </div>
                    <div class="next">
                        <img src="assets/img/next.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="subscribe__now">

    </section>
@endsection('content')
