@extends('layouts.app')

@section('page-title') Профиль пользователя @endsection
@section('grey-bg') grey @endsection

@section('content')
    <section class="profile">
        <div class="container">
            <div class="profile-wrapper">
                @include('components.profile-left')
                <div class="content">
                    <div class="profile__user">
                        <div class="profile__ava">
                            <div class="ava">
                                <img src="assets/avatar/user.png" alt="" class="ava-img">
                                <form>
                                    <label for="ava"><img src="assets/img/ava-change.png" alt=""></label>
                                    <input type="file" id="ava" name="ava" class="ava-input">
                                </form>
                            </div>
                            <h2 class="profile__title">
                                Общая информация
                            </h2>
                        </div>
                        <div class="profile__personal-information">
                            <form>
                                <div class="form__item">
                                    <label for="surname">Фамилия</label>
                                    <input type="text" name="" id="surname" class="input">
                                </div>
                                <div class="form__item">
                                    <label for="name">Имя</label>
                                    <input type="text" name="" id="name" class="input">
                                </div>
                                <div class="form__item">
                                    <label for="patronymic">Отчество</label>
                                    <input type="text" name="" id="patronymic" class="input">
                                </div>
                                <div class="form__item">
                                    <label for="email">Почта</label>
                                    <input type="text" name="" id="email" class="input">
                                </div>
                                <button class="button">Сохранить</button>
                            </form>
                        </div>
                        <div class="profile__personal-password">
                            <div class="title">
                                Смена пароля
                            </div>
                            <form>
                                <div class="form__item">
                                    <label for="password">Пароль</label>
                                    <input type="password" name="" id="password" class="input">
                                </div>
                                <div class="div"></div>
                                <div class="form__item">
                                    <label for="new-password">Новый пароль</label>
                                    <input type="password" name="" id="new-password" class="input">
                                </div>
                                <div class="form__item">
                                    <label for="confirmation">Подтверждение пароля</label>
                                    <input type="password" name="" id="confirmation" class="input">
                                </div>
                                <button class="button">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection('content')
