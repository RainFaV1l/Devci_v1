<!--Мобильное меню-->
<div class="modal-burger">
    <div class="content">
        <div class="modal-burger__title">
            <h2>Меню</h2>
            <a href="#" class='close'><img src="{{asset('assets/img/close.png')}}" alt="Кнопка закрыть"></a>
        </div>
        <div class="modal-burger__wrapper">
            <a href="{{ route('index.index') }}">Главная</a>
            <a href="{{ route('catalog.index') }}">Каталог</a>
            <a href="{{ route('index.benefits') }}">Преимущества</a>
            <a href="{{ route('index.about') }}">О нас</a>
            <a href="{{ route('index.review') }}">Отзывы</a>
            @auth
                <a href="{{ route('logout') }}" class="button-account__modal">Выход</a>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="button-account__modal">Войти</a>
            @endguest
        </div>
    </div>
</div>

<header class="opacity-anim element-animation">
    <div class="container">
        <div class="head">
            <div class="logo">
                <a href="/">
                    {{--<img src="{{asset('assets/img/Devci.png')}}" alt="Логотип сайта">--}}
                    <svg width="112" height="33" viewBox="0 0 112 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.32 32V4H13.04C16.08 4 18.76 4.58667 21.08 5.76C23.4 6.90667 25.2133 8.52 26.52 10.6C27.8267 12.68 28.48 15.1467 28.48 18C28.48 20.8267 27.8267 23.2933 26.52 25.4C25.2133 27.48 23.4 29.1067 21.08 30.28C18.76 31.4267 16.08 32 13.04 32H0.32ZM6.8 26.68H12.72C14.5867 26.68 16.2 26.3333 17.56 25.64C18.9467 24.92 20.0133 23.9067 20.76 22.6C21.5333 21.2933 21.92 19.76 21.92 18C21.92 16.2133 21.5333 14.68 20.76 13.4C20.0133 12.0933 18.9467 11.0933 17.56 10.4C16.2 9.68 14.5867 9.32 12.72 9.32H6.8V26.68ZM43.6069 32.32C41.1535 32.32 38.9935 31.84 37.1269 30.88C35.2869 29.92 33.8602 28.6133 32.8469 26.96C31.8335 25.28 31.3269 23.3733 31.3269 21.24C31.3269 19.08 31.8202 17.1733 32.8069 15.52C33.8202 13.84 35.1935 12.5333 36.9269 11.6C38.6602 10.64 40.6202 10.16 42.8069 10.16C44.9135 10.16 46.8069 10.6133 48.4869 11.52C50.1935 12.4 51.5402 13.68 52.5269 15.36C53.5135 17.0133 54.0069 19 54.0069 21.32C54.0069 21.56 53.9935 21.84 53.9669 22.16C53.9402 22.4533 53.9135 22.7333 53.8869 23H36.4069V19.36H50.6069L48.2069 20.44C48.2069 19.32 47.9802 18.3467 47.5269 17.52C47.0735 16.6933 46.4469 16.0533 45.6469 15.6C44.8469 15.12 43.9135 14.88 42.8469 14.88C41.7802 14.88 40.8335 15.12 40.0069 15.6C39.2069 16.0533 38.5802 16.7067 38.1269 17.56C37.6735 18.3867 37.4469 19.3733 37.4469 20.52V21.48C37.4469 22.6533 37.7002 23.6933 38.2069 24.6C38.7402 25.48 39.4735 26.16 40.4069 26.64C41.3669 27.0933 42.4869 27.32 43.7669 27.32C44.9135 27.32 45.9135 27.1467 46.7669 26.8C47.6469 26.4533 48.4469 25.9333 49.1669 25.24L52.4869 28.84C51.5002 29.96 50.2602 30.8267 48.7669 31.44C47.2735 32.0267 45.5535 32.32 43.6069 32.32ZM63.6106 32L54.5706 10.48H61.0106L68.5306 29H65.3306L73.1306 10.48H79.1306L70.0506 32H63.6106ZM91.4909 32.32C89.1709 32.32 87.1043 31.8533 85.2909 30.92C83.4776 29.96 82.0509 28.64 81.0109 26.96C79.9976 25.28 79.4909 23.3733 79.4909 21.24C79.4909 19.08 79.9976 17.1733 81.0109 15.52C82.0509 13.84 83.4776 12.5333 85.2909 11.6C87.1043 10.64 89.1709 10.16 91.4909 10.16C93.7576 10.16 95.7309 10.64 97.4109 11.6C99.0909 12.5333 100.331 13.88 101.131 15.64L96.2909 18.24C95.7309 17.2267 95.0243 16.48 94.1709 16C93.3443 15.52 92.4376 15.28 91.4509 15.28C90.3843 15.28 89.4243 15.52 88.5709 16C87.7176 16.48 87.0376 17.16 86.5309 18.04C86.0509 18.92 85.8109 19.9867 85.8109 21.24C85.8109 22.4933 86.0509 23.56 86.5309 24.44C87.0376 25.32 87.7176 26 88.5709 26.48C89.4243 26.96 90.3843 27.2 91.4509 27.2C92.4376 27.2 93.3443 26.9733 94.1709 26.52C95.0243 26.04 95.7309 25.28 96.2909 24.24L101.131 26.88C100.331 28.6133 99.0909 29.96 97.4109 30.92C95.7309 31.8533 93.7576 32.32 91.4909 32.32ZM104.607 32V10.48H110.847V32H104.607ZM107.727 7.48C106.58 7.48 105.647 7.14667 104.927 6.48C104.207 5.81333 103.847 4.98666 103.847 4C103.847 3.01333 104.207 2.18667 104.927 1.52C105.647 0.853331 106.58 0.519998 107.727 0.519998C108.873 0.519998 109.807 0.839998 110.527 1.48C111.247 2.09333 111.607 2.89333 111.607 3.88C111.607 4.92 111.247 5.78667 110.527 6.48C109.833 7.14667 108.9 7.48 107.727 7.48Z" fill="url(#paint0_linear_904_3686)"/>
                        <defs>
                            <linearGradient id="paint0_linear_904_3686" x1="-3" y1="-7" x2="31.9182" y2="76.3761" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F8A4D8"/>
                                <stop offset="1" stop-color="#6C63FF"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="nav">
                <a href="{{ route('index.index') }}" class="nav__a {{ \App\Models\Header::isActiveRoute('index.index') }}">Главная</a>
                <a href="{{ route('catalog.index') }}" class="nav__a {{ \App\Models\Header::isActiveRoute('catalog.index') }}">Каталог</a>
                <a href="{{ route('index.benefits') }}" class="nav__a {{ \App\Models\Header::isActiveRoute('index.benefits') }}">Преимущества</a>
                <a href="{{ route('index.about') }}" class="nav__a {{ \App\Models\Header::isActiveRoute('index.about') }}">О нас</a>
                <a href="{{ route('index.review') }}" class="nav__a {{ \App\Models\Header::isActiveRoute('index.review') }}">Отзывы</a>
            </div>
            @auth
                <div class="account">
                    <div class="account-wrapper">
                        <div data-turbolinks-permanent class="name">
                            <div class="arrow">
                                <img src="{{ asset('assets/img/arrow.png') }}" alt="icon">
                            </div>
                            <p>
                                {{ \App\Models\User::getFIO() }}
                            </p>
                            <div class="ava">
                                @if(\Illuminate\Support\Facades\Auth::user()->profile_photo_path)
                                    <img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->profile_photo_path) }}" alt="avatar">
                                @else
                                    <img src="{{ asset('assets/img/gamer.png') }}" alt="avatar">
                                @endif

                            </div>
                        </div>
                        <div class="menu">
                            <a href="{{ route('index.index') }}" class="{{ \App\Models\Header::isActiveRoute('index.index') }}">Главная</a>
                            <a href="{{ route('profile.index') }}" class="{{ \App\Models\Header::isActiveRoute('profile.index') }}">Профиль</a>
                            <a href="#">Заявки</a>
                            <a href="#">Сертификаты</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="exit">Выйти</button>
                            </form>
                        </div>
                    </div>
                    <a href="#" class="burger"><img src="assets/img/burger.png" alt=""></a>
                </div>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="button-account">Вход</a>
            @endguest
{{--                <a href="#" class="burger"><img src="{{asset('assets/img/burger.png')}}" alt="Меню"></a>--}}
        </div>
    </div>
</header>
