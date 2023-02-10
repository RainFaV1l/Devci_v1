@extends('layouts.main')

@section('page-title') Регистрация @endsection

@section('content')
    <section class="registration opacity-anim element-animation">
        <div class="container">
            <div class="reg-wrapper">
                <div class="auth-title">Регистрация</div>
                <x-jet-validation-errors class="mb-4" />
                <div class="account-create">Есть профиль? Скорей <a href="{{ route('login') }}">авторизуйся!</a></div>
                <form action="{{ route('register') }}" method="post" class="reg-form" novalidate>
                    @csrf
                    <input type="text" name="surname" class="input" placeholder="Фамилия" value="{{old('surname')}}" required autofocus autocomplete="surname">
                    <input type="text" name="name" class="input" placeholder="Имя" value="{{old('name')}}" required autofocus autocomplete="name">
                    <input type="text" name="patronymic" class="input" placeholder="Отчество" value="{{old('patronymic')}}" required autofocus autocomplete="patronymic">
                    <input type="date" name="birthday_date" class="input" placeholder="Дата рождения" value="{{old('birthday_date')}}" required autofocus autocomplete="birthday">
                    <input type="text" name="tel" class="input tel" placeholder="Телефон" value="{{old('tel')}}" required autofocus autocomplete="tel">
                    <input type="email" name="email" class="input" placeholder="Email" value="{{old('email')}}" required autofocus autocomplete="email">
                    <input type="password" name="password" class="input" placeholder="Пароль" value="{{old('password')}}" required autocomplete="new-password">
                    <input type="password" name="password_confirmation" class="input" placeholder="Подтвердите пароль" value="{{old('password_confirmation')}}" required autofocus autocomplete="new-password">
                    <div class="reg__row">
                        <div class="g-recaptcha" data-sitekey="6Ldl6VQkAAAAAONB7z5s0khGvLOxwB-YCmIOA_3t"></div>
                        <div class="check-wrapper">
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <input type="checkbox" id="check" name="terms" required>
                                <label for="check">
                                    {!! __('Согласен c :terms_of_service и :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('условием использования').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('политикой конфиденциальности').'</a>',
                                    ]) !!};
                                </label>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="button small">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </section>

{{--<x-guest-layout>--}}
{{--    <x-jet-authentication-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <x-jet-authentication-card-logo />--}}
{{--        </x-slot>--}}

{{--        <x-jet-validation-errors class="mb-4" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <div>--}}
{{--                <x-jet-label for="name" value="{{ __('Name') }}" />--}}
{{--                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="email" value="{{ __('Email') }}" />--}}
{{--                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password" value="{{ __('Password') }}" />--}}
{{--                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <div class="mt-4">--}}
{{--                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />--}}
{{--                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())--}}
{{--                <div class="mt-4">--}}
{{--                    <x-jet-label for="terms">--}}
{{--                        <div class="flex items-center">--}}
{{--                            <x-jet-checkbox name="terms" id="terms" required />--}}

{{--                            <div class="ml-2">--}}
{{--                                {!! __('I agree to the :terms_of_service and :privacy_policy', [--}}
{{--                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',--}}
{{--                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',--}}
{{--                                ]) !!}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </x-jet-label>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-jet-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-jet-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
@endsection('content')
