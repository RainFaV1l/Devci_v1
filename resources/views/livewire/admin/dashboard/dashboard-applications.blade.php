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
                            <p class="admin-panel-content-aside-header__subtitle">Информация о заявках</p>
                            <div class="admin-panel-line"></div>
                        </div>
                    </div>
                    <div class="admin-panel-info__tables">
                        <div class="admin-panel-info__new-users admin-panel-info-new-users admin-panel-info-users">
                            <div class="admin-panel-info-new-users__container">
                                <div class="admin-panel-info-new-users__header">
                                    <h3 class="admin-panel-info-new-users__title">Заявки</h3>
                                    <form action="" class="admin-panel-info-new-users__form">
                                        <input type="search" placeholder="Поиск пользователей">
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
                                    <div class="admin-panel-info-new-users__table new-users-table applications-table">
                                        <div class="new-users-table__item new-users-table__header">
                                            <p class="new-users-table__name new-users-table__id">id</p>
                                            <p class="new-users-table__name">id пользователя</p>
                                            <p class="new-users-table__name">Название курса</p>
                                            <p class="new-users-table__name">Пользователь</p>
                                            <p class="new-users-table__name">Оплата</p>
                                            <p class="new-users-table__name admin-control__buttons admin-control__hide">
                                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17.8639 10.6986L11.9375 16.625L9.91735 14.6049M13.5 1C6.59644 1 1 6.59644 1 13.5C1 20.4036 6.59644 26 13.5 26C20.4036 26 26 20.4036 26 13.5C26 6.59644 20.4036 1 13.5 1Z" stroke="#6C63FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.6265 9.78769C19.017 9.39717 19.017 8.764 18.6265 8.37348C18.236 7.98295 17.6028 7.98295 17.2123 8.37348L18.6265 9.78769ZM8.37348 17.2123C7.98295 17.6028 7.98295 18.236 8.37348 18.6265C8.764 19.017 9.39716 19.017 9.78769 18.6265L8.37348 17.2123ZM17.2123 18.6265C17.6028 19.017 18.236 19.017 18.6265 18.6265C19.017 18.236 19.017 17.6028 18.6265 17.2123L17.2123 18.6265ZM9.78769 8.37348C9.39716 7.98295 8.764 7.98295 8.37348 8.37348C7.98295 8.764 7.98295 9.39716 8.37348 9.78769L9.78769 8.37348ZM25 13.5C25 19.8513 19.8513 25 13.5 25V27C20.9558 27 27 20.9558 27 13.5H25ZM13.5 25C7.14873 25 2 19.8513 2 13.5H0C0 20.9558 6.04416 27 13.5 27V25ZM2 13.5C2 7.14873 7.14873 2 13.5 2V0C6.04416 0 0 6.04416 0 13.5H2ZM13.5 2C19.8513 2 25 7.14873 25 13.5H27C27 6.04416 20.9558 0 13.5 0V2ZM17.2123 8.37348L12.7929 12.7929L14.2071 14.2071L18.6265 9.78769L17.2123 8.37348ZM12.7929 12.7929L8.37348 17.2123L9.78769 18.6265L14.2071 14.2071L12.7929 12.7929ZM18.6265 17.2123L14.2071 12.7929L12.7929 14.2071L17.2123 18.6265L18.6265 17.2123ZM14.2071 12.7929L9.78769 8.37348L8.37348 9.78769L12.7929 14.2071L14.2071 12.7929Z" fill="#6C63FF"/>
                                                </svg>
                                            </p>
                                        </div>
                                        <div class="new-users-table__item">
                                            <p class="new-users-table__name new-users-table__id">01</p>
                                            <p class="new-users-table__name">01</p>
                                            <p class="new-users-table__name">Веб разработка с нуля до PRO</p>
                                            <p class="new-users-table__name">Иванов Иван Ивановчи</p>
                                            <a href="#" class="new-users-table__name new-users-table__link">Смотреть</a>
                                            <p class="new-users-table__name admin-control__buttons">
                                                <a href="#">
                                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.8639 10.6986L11.9375 16.625L9.91735 14.6049M13.5 1C6.59644 1 1 6.59644 1 13.5C1 20.4036 6.59644 26 13.5 26C20.4036 26 26 20.4036 26 13.5C26 6.59644 20.4036 1 13.5 1Z" stroke="#6C63FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </a>
                                                <a href="#">
                                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-svg">
                                                        <path d="M18.6265 9.78769C19.017 9.39717 19.017 8.764 18.6265 8.37348C18.236 7.98295 17.6028 7.98295 17.2123 8.37348L18.6265 9.78769ZM8.37348 17.2123C7.98295 17.6028 7.98295 18.236 8.37348 18.6265C8.764 19.017 9.39716 19.017 9.78769 18.6265L8.37348 17.2123ZM17.2123 18.6265C17.6028 19.017 18.236 19.017 18.6265 18.6265C19.017 18.236 19.017 17.6028 18.6265 17.2123L17.2123 18.6265ZM9.78769 8.37348C9.39716 7.98295 8.764 7.98295 8.37348 8.37348C7.98295 8.764 7.98295 9.39716 8.37348 9.78769L9.78769 8.37348ZM25 13.5C25 19.8513 19.8513 25 13.5 25V27C20.9558 27 27 20.9558 27 13.5H25ZM13.5 25C7.14873 25 2 19.8513 2 13.5H0C0 20.9558 6.04416 27 13.5 27V25ZM2 13.5C2 7.14873 7.14873 2 13.5 2V0C6.04416 0 0 6.04416 0 13.5H2ZM13.5 2C19.8513 2 25 7.14873 25 13.5H27C27 6.04416 20.9558 0 13.5 0V2ZM17.2123 8.37348L12.7929 12.7929L14.2071 14.2071L18.6265 9.78769L17.2123 8.37348ZM12.7929 12.7929L8.37348 17.2123L9.78769 18.6265L14.2071 14.2071L12.7929 12.7929ZM18.6265 17.2123L14.2071 12.7929L12.7929 14.2071L17.2123 18.6265L18.6265 17.2123ZM14.2071 12.7929L9.78769 8.37348L8.37348 9.78769L12.7929 14.2071L14.2071 12.7929Z" fill="#6C63FF"/>
                                                    </svg>
                                                </a>
                                            </p>
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
