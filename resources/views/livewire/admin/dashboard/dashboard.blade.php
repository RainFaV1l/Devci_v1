@extends('layouts.app-dashboard')

@section('page-title') Админ панель @endsection

@section('content')

    <section class="admin-panel">
        <div class="admin-panel__container">
            <div class="admin-panel-content">
                @include('components.admin-aside')
                <div class="admin-panel-content__content">
                    <div class="admin-panel-content-aside__header admin-panel-content-aside-header">
                        <div class="admin-panel-content-aside-header__container">
                            <h1 class="admin-panel-content-aside-header__title">Панель администратора</h1>
                            <p class="admin-panel-content-aside-header__subtitle">Основная информация и статистика</p>
                            <div class="admin-panel-line"></div>
                        </div>
                    </div>
                    <div class="admin-panel-content__info-list">
                        <div class="admin-panel-content__info-item admin-panel-content-info-item">
                            <h3 class="admin-panel-content-info-item__title">105</h3>
                            <p class="admin-panel-content-info-item__subtitle">Зарегистрированных пользователей</p>
                        </div>
                        <div class="admin-panel-content__info-item admin-panel-content-info-item">
                            <h3 class="admin-panel-content-info-item__title">7</h3>
                            <p class="admin-panel-content-info-item__subtitle">Курсов</p>
                        </div>
                        <div class="admin-panel-content__info-item admin-panel-content-info-item">
                            <h3 class="admin-panel-content-info-item__title">4</h3>
                            <p class="admin-panel-content-info-item__subtitle">Сформированных групп</p>
                        </div>
                        <div class="admin-panel-content__info-item admin-panel-content-info-item">
                            <h3 class="admin-panel-content-info-item__title">5</h3>
                            <p class="admin-panel-content-info-item__subtitle">Активных заявок на запись</p>
                        </div>
                        <div class="admin-panel-content__info-item admin-panel-content-info-item">
                            <h3 class="admin-panel-content-info-item__title">11</h3>
                            <p class="admin-panel-content-info-item__subtitle">Заданий на проверку</p>
                        </div>
                    </div>
                    <div class="admin-panel-info__tables">
                        <div class="admin-panel-info__new-users admin-panel-info-new-users admin-panel-info-new-groups">
                            <div class="admin-panel-info-new-users__container">
                                <div class="admin-panel-info-new-users__header">
                                    <h3 class="admin-panel-info-new-users__title">Новые группы</h3>
                                    <a class="admin-panel-info-new-users__link" href="#">Смотреть все
                                        <span>
                                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1.75L5.12504 5.87504C5.32846 6.07846 5.31869 6.41117 5.10367 6.6023L1 10.25" stroke="#6C63FF" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </span>
                                    </a>
                                </div>
                                <div class="users-table">
                                    <div class="admin-panel-info-new-users__table new-users-table new-users-table-group">
                                        <div class="new-users-table__item new-users-table__header">
                                            <p class="new-users-table__name">id</p>
                                            <p class="new-users-table__name">Название</p>
                                            <p class="new-users-table__name">Количество</p>
                                            <p class="new-users-table__name">Преподаватель</p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">224 ВЕБ</p>
                                            <p class="new-users-table__name">25</p>
                                            <p class="new-users-table__name">Гиндуллин Аяз Ильгизович</p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">224 ВЕБ</p>
                                            <p class="new-users-table__name">25</p>
                                            <p class="new-users-table__name">Гиндуллин Аяз Ильгизович</p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">224 ВЕБ</p>
                                            <p class="new-users-table__name">25</p>
                                            <p class="new-users-table__name">Гиндуллин Аяз Ильгизович</p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">224 ВЕБ</p>
                                            <p class="new-users-table__name">25</p>
                                            <p class="new-users-table__name">Гиндуллин Аяз Ильгизович</p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">224 ВЕБ</p>
                                            <p class="new-users-table__name">25</p>
                                            <p class="new-users-table__name">Гиндуллин Аяз Ильгизович</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin-panel-info__new-groups admin-panel-info-new-groups">
                            <div class="admin-panel-info-new-users__container">
                                <div class="admin-panel-info-new-users__header">
                                    <h3 class="admin-panel-info-new-users__title">Новые пользователи</h3>
                                    <a class="admin-panel-info-new-users__link" href="#">Смотреть всех
                                        <span>
                                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1.75L5.12504 5.87504C5.32846 6.07846 5.31869 6.41117 5.10367 6.6023L1 10.25" stroke="#6C63FF" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </span>
                                    </a>
                                </div>
                                <div class="users-table">
                                    <div class="admin-panel-info-new-users__table new-users-table new-users-table-users">
                                        <div class="new-users-table__item new-users-table__header">
                                            <p class="new-users-table__name">id</p>
                                            <p class="new-users-table__name">Фамилия</p>
                                            <p class="new-users-table__name">Имя</p>
                                            <p class="new-users-table__name">Отчество</p>
                                            <p class="new-users-table__name">Email</p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">Иванов</p>
                                            <p class="new-users-table__name">Иван</p>
                                            <p class="new-users-table__name">Алексеевич</p>
                                            <p class="new-users-table__name">ivanov_ivan@mail.ru</p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">Иванов</p>
                                            <p class="new-users-table__name">Иван</p>
                                            <p class="new-users-table__name">Алексеевич</p>
                                            <p class="new-users-table__name">ivanov_ivan@mail.ru</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection('content')
