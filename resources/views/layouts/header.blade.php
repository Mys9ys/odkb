<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Широтаки</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/block/header/style.css') }}" rel="stylesheet">
{{--<link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">--}}

<!-- Fonts -->
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}
    {{--<link href="http://allfont.ru/allfont.css?fonts=cyrillicold" rel="stylesheet" type="text/css"/>--}}
    <link href="{{ asset('public/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('public/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('public/js/main.js') }}"></script>
    <script src="{{ asset('public/block/header/script.js') }}"></script>
</head>

<nav class="navbar navbar-default navbar-static-top nav_bar_setting">
    <div class="container">


        <!-- Branding Image -->

        <!--            --><?//dd(Auth::guest())?>
        <div class="dropdown">
            @if(Auth::guest())

                <div class="login_social">
                    <img src="/public/image/door_user.png" alt="">
                    <span>Добро пожаловать!</span>
                </div>

            @else
                <div class="logo">716 ОДКБ</div>
                <div class="losung">[ Кто, если не мы! ]</div>



                <a href="#" class="dropdown-toggle user_header right" data-toggle="dropdown_odkb" role="button"
                   aria-expanded="false">
                    <div class="user_avatar left"><img src="{{ Auth::user()->avatar }}" alt=""></div>
                </a>


                <ul class="dropdown_odkb" role="menu">
                    <li>
                        {{--<a href="{{ route('message') }}" class="messages">--}}
                        {{--Сообщения--}}
                        {{--</a>--}}
                    </li>
                    <li>
                        {{--<a href="{{ route('profile') }}">--}}
                        {{--Настройки--}}
                        {{--</a>--}}
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Выйти
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>


            @endif
        </div>

    </div>
</nav>
<script>
    $(document).ready(function () {
        $('.user_header').on('click', function () {
            $('.dropdown_odkb').toggle();
        });
    });
</script>

@include('auth.social')