<!DOCTYPE doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <title>
                    @yield('title')
                </title>
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
                    <!-- Styles -->
                    <style>
                        html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
                    </style>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/') }}">
                    Home
                </a>
                <a href="{{ url('/home') }}">
                    Dashboard
                </a>
                <a href="{{ url('/projects') }}">
                    Projects
                </a>
                <a href="{{ url('/contact') }}">
                    Contact Us
                </a>
                <a href="{{ url('/about') }}">
                    About Us
                </a>
                @else
                <a href="{{ url('/') }}">
                    Home
                </a>
                <a href="{{ url('/projects') }}">
                    Projects
                </a>
                <a href="{{ url('/contact') }}">
                    Contact Us
                </a>
                <a href="{{ url('/about') }}">
                    About Us
                </a>
                <a href="{{ route('login') }}">
                    Login
                </a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    Register
                </a>
                @endif
                    @endauth
            </div>
            @endif
            <div class="content">
                @yield('content')
                <!-- <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
<!-- <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/contact">Contact us</a>
        </li>
        <li>
            <a href="/about">About us</a>
        </li>
    </ul>

</body>
</html> -->
