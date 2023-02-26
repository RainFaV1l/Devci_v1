@extends('layouts.app')

@section('page-title') Профиль пользователя @endsection
@section('grey-bg') grey @endsection

@section('content')
    <section class="profile">
        <div class="container">
            <div class="profile-wrapper full-profile">
                {{--                @include('components.profile-left')--}}
                <div class="content">
                    <div class="profile__user">
                        <div class="profile__ava">
                            <!-- Profile Photo -->
                            <div class="ava">
{{--                                @if($user['path'])--}}
{{--                                    <img src="{{ asset('assets/img/ava-change.png') }}" alt="avatar" class="ava-img">--}}
{{--                                @endif--}}

                                <form class="ava" method="post" action="{{ route('profile.changeAvatar', $user) }}" enctype="multipart/form-data">
                                    @csrf
                                    <label class="ava-img-label @error('avatar') error @enderror" for="avatar">
                                        @if($user['profile_photo_path'])
                                            <img src="{{ asset($user['profile_photo_path']) }}" alt="avatar" class="ava-img">
                                        @else
                                            <img src="{{ asset('assets/img/gamer.png') }}" alt="avatar" class="ava-img">
                                        @endif
                                    </label>
                                    <label class="hover-open">
                                        <svg width="30" height="30" viewBox="0 0 45 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.7171 0.0842321C18.2524 0.37164 15.9183 1.19032 13.9412 2.4793C11.0323 4.37794 8.85499 7.18235 7.7489 10.4919C7.40924 11.5196 7.04344 13.2266 7.04344 13.8015C7.04344 14.1498 6.94764 14.2282 6.3554 14.3501C4.70063 14.6985 2.79328 15.9614 1.6872 17.4332C0.520144 18.9748 -0.106929 21.0563 0.0150016 22.955C0.258863 26.6216 2.70619 29.5828 6.32928 30.5756C6.95635 30.7498 7.24376 30.7673 11.163 30.7934L15.3173 30.8282V29.4347V28.0412L11.3371 28.0151L7.34827 27.989L6.66023 27.7451C5.57156 27.3619 4.78772 26.8219 4.07356 25.9684C3.65551 25.472 3.09811 24.3398 2.95005 23.6953C2.8107 23.0943 2.8107 21.814 2.95005 21.2218C3.49874 18.9051 5.49318 17.1545 7.8447 16.9281C8.79402 16.841 8.95079 16.7975 9.22078 16.5623C9.64754 16.2052 9.73463 15.9439 9.82172 14.7246C9.96978 12.7825 10.353 11.389 11.163 9.80386C12.8264 6.52044 15.8225 4.1515 19.3672 3.3154C24.5405 2.08738 29.8532 4.17762 32.7534 8.56713C33.6069 9.85612 34.1034 10.997 34.565 12.7476C34.835 13.7666 35.0788 14.0105 36.0978 14.2195C37.5349 14.5243 38.5974 15.0817 39.6425 16.092C43.7098 20.0199 41.6108 26.9003 36.0456 27.9106C35.5753 27.989 34.5214 28.0238 32.3267 28.0325H29.2523V29.4347V30.8369L32.7186 30.7934C35.6014 30.7673 36.2894 30.7324 36.8294 30.6105C39.7209 29.9399 42.1334 28.1109 43.4311 25.5939C44.2498 24.0175 44.5372 22.8243 44.5372 21.0215C44.5285 20.3509 44.4849 19.567 44.4152 19.2796C43.9885 17.2416 43.1001 15.5782 41.7066 14.1847C40.5918 13.0699 39.329 12.2947 37.8223 11.7983L37.1168 11.5631L36.9688 11.0145C36.8817 10.7096 36.6552 10.0564 36.4549 9.56C34.7653 5.3621 31.2554 2.11351 26.9007 0.728724C24.9237 0.0929414 22.6767 -0.142211 20.7171 0.0842321Z" fill="white"/>
                                            <path d="M21.7622 17.0239C21.5706 17.1023 20.36 18.2519 18.6095 20.0025L15.7528 22.8505L16.7282 23.8259L17.7124 24.8101L19.2975 23.225L20.8913 21.6312V28.3199V35H22.2848H23.6783V28.3199V21.6312L25.2895 23.2424L26.9008 24.8536L27.8762 23.8695L28.8604 22.894L25.9863 20.0112C24.4012 18.4174 22.9903 17.0762 22.8335 17.0065C22.4764 16.8497 22.1454 16.8584 21.7622 17.0239Z" fill="white"/>
                                        </svg>
                                    </label>
                                    <label class="open" for="avatar_button"><img src="{{ asset('assets/img/ava-change.png') }}" alt="img"></label>
                                    <input type="file" id="avatar" name="avatar" class="ava-input-file ava-input">
                                    <button id="avatar_button" type="submit"></button>
                                </form>
                            </div>
                            <div class="profile-title__column">
                                <h2 class="profile__title">
                                    Общая информация
                                </h2>
                                @error('avatar')
                                    <p class="profile-title__text error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="profile__personal-information">
                            <form action="{{ route('profile.changePersonalInfo', $user) }}" method="post">
                                @csrf
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('surname') error @enderror">
                                            <input class="input" id="profile-surname" type="text" name="surname" value="{{ $user['surname'] }}" required autofocus>
                                            <label for="profile-surname">Фамилия</label>
                                        </div>
                                        @error('surname')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('name') error @enderror">
                                            <input class="input" id="profile-name" type="text" name="name" value="{{ $user['name'] }}" required autofocus>
                                            <label for="profile-name">Имя</label>
                                        </div>
                                        @error('name')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('patronymic') error @enderror">
                                            <input class="input" id="profile-patronymic" type="text" name="patronymic" value="{{ $user['patronymic'] }}" required autofocus>
                                            <label for="profile-patronymic">Отчество</label>
                                        </div>
                                        @error('patronymic')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('birthday_date') error @enderror">
                                            <input class="input" id="profile-birthday" type="date"  min="1950-01-01" max="2023-01-01" name="birthday_date" value="{{  date('Y-m-d', strtotime($user['birthday_date']) ) }}" required autofocus>
                                            <label for="profile-birthday">Дата рождения</label>
                                        </div>
                                        @error('birthday_date')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item-button">
                                    <button type="submit" class="button">Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="profile__personal-password profile__personal-email">
                            <div class="title">
                                Смена email
                            </div>
                            <form method="post" action="{{ route('profile.changeEmail', $user) }}">
                                @csrf
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('email') error @enderror">
                                            <input class="input" id="profile-password" type="text" name="email" value="{{ $user['email'] }}" required autofocus autocomplete="email">
                                            <label for="profile-password">Email</label>
                                        </div>
                                        @error('email')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('invalid') error @enderror @error('password') error @enderror">
                                            <input class="input" id="profile-new-password" type="password" name="password" required autofocus>
                                            <label for="profile-new-password">Пароль</label>
                                        </div>
                                        @error('invalid_email')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                        @error('password')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item-button">
                                    <button type="submit" class="button">Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="profile__personal-password profile__personal-email profile__personal-tel">
                            <div class="title">
                                Смена телефона
                            </div>
                            <form method="post" action="{{ route('profile.changeTel', $user) }}">
                                @csrf
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('tel') error @enderror">
                                            <input id="profile-tel" type="text" name="tel" class="input tel" value="{{ $user['tel'] }}" required autofocus autocomplete="tel">
                                            <label for="profile-tel">Телефон</label>
                                        </div>
                                        @error('tel')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('password_tel') error @enderror">
                                            <input class="input" id="profile-password_tel" type="password" name="password_tel" required autofocus>
                                            <label for="profile-password_tel">Пароль</label>
                                        </div>
                                        @error('invalid_tel')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                        @error('password_tel')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item-button">
                                    <button type="submit" class="button">Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="profile__personal-password profile__personal-password-pass">
                            <div class="title">
                                Смена пароля
                            </div>
                            <form method="post" action="{{ route('profile.changePassword', $user) }}">
                                @csrf
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('password_old') error @enderror">
                                            <input class="input" id="profile-password" type="password" name="password_old" required autofocus>
                                            <label for="profile-password">Пароль</label>
                                        </div>
                                        @error('password_old')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('password_new') error @enderror">
                                            <input class="input" id="profile-new-password" type="password" name="password_new" required autofocus>
                                            <label for="profile-new-password">Новый пароль</label>
                                        </div>
                                        @error('password_new')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item">
                                    <div class="error__input-column">
                                        <div class="input-column @error('password_r') error @enderror">
                                            <input class="input" id="profile-password_r" type="password" name="password_r" required autofocus>
                                            <label for="profile-password_r">Подтверждение пароля</label>
                                        </div>
                                        @error('invalid_password')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                        @error('password_r')
                                            <div class="input-column-error__text"> {{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form__item-button">
                                    <button type="submit" class="button">Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection('content')
