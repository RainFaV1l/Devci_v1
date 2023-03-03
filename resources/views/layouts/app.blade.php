<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.svg') }}" type="image/svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script data-turbolinks-track="reload" src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script data-turbolinks-track="reload"
        src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"
        integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
    <script data-turbolinks-track="reload" src="{{ asset('assets/js/index.js') }}" defer></script>
    <script data-turbolinks-track="reload" src="{{ asset('assets/js/slider.js') }}" defer></script>
    <script data-turbolinks-track="reload" src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="{{ asset('assets/scss/style.scss') }}">
    {{--        @vite(['public/assets/scss/style.scss', 'public/assets/css/style.css'], 'assets/js/index.js') --}}

    @vite(['resources/scss/style.scss'], 'resources/js/index.js')

    @livewireScripts

    {{--    <script  data-turbolinks-track="reload" src="{{mix(asset('resources/js/app.js'))}}"></script> --}}

    <script src="https://cdn.skypack.dev/pin/@hotwired/turbo@v7.2.5-jwYMmpCb8mVWq1WRn6YH/mode=imports,min/optimized/@hotwired/turbo.js" type="module">
        // import hotwiredTurbo from 'https://cdn.skypack.dev/@hotwired/turbo';
    </script>

    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>

    {{--    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}

    <script data-turbolinks-track="reload" src="{{ asset('assets/js/index.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    @livewireStyles
</head>

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

        <div class="main-section @yield('gray-main-section')">
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
