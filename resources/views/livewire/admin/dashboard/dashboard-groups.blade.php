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
                            <p class="admin-panel-content-aside-header__subtitle">Информация о группах</p>
                            <div class="admin-panel-line"></div>
                        </div>
                    </div>

                    <div class="admin-panel-info__tables">
                        <div class="admin-panel-info__new-users admin-panel-info-new-users admin-panel-info-users">
                            <div class="admin-panel-info-new-users__container">
                                <div class="admin-panel-info-new-users__header">
                                    <h3 class="admin-panel-info-new-users__title">Группы</h3>
                                    <form action="" class="admin-panel-info-new-users__form">
                                        <input type="search" placeholder="Поиск по группам">
                                        <button type="submit">
                                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="6.5" cy="6.5" r="5.75" stroke="#1D1D39" stroke-opacity="0.6" stroke-width="1.5"/>
                                                <line x1="11.0607" y1="11" x2="16" y2="15.9393" stroke="#1D1D39" stroke-opacity="0.6" stroke-width="1.5" stroke-linecap="round"/>
                                            </svg>
                                        </button>
                                    </form>
                                    <div class="admin-panel-info-new-users__buttons">
                                        <a href="#" class="admin-panel-info-groups__button">Добавить группу</a>
                                    </div>
                                </div>
                                <div class="users-table">
                                    <div class="admin-panel-info-new-users__table new-users-table  groups-table">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection('content')
