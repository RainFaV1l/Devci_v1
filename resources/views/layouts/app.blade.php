<!DOCTYPE html>
<html lang="ru">

@include('components.head')

<body class="@yield('grey-bg')">

    <!--Фон для меню-->
    <div class="bg-black"></div>

    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div class="wrapper">

        <div class="main-section @yield('gray-main-section') @yield('paddin-none')">
            @include('components.header')
            @yield('banner')
        </div>

        <main class="main">
            @yield('content')
        </main>

        @include('components.footer')
    </div>
</body>

</html>
