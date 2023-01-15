<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/bootstrap.min.css', 'resources/css/animate.css', 'resources/css/flex-slider.css', 'resources/css/fontawesome.css', 'resources/css/owl.css', 'resources/css/cyborg.css', 'resources/js/jquery.js', 'resources/js/bootstrap.min.js', 'resources/js/custom.js', 'resources/js/isotope.js', 'resources/js/owl-carousel.js', 'resources/js/popup.js', 'resources/js/tabs.js'])

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="/" class="logo">
                        Logo
                        {{-- <img src="/src/views/assets/images/logo.png"
                            alt=""> --}}
                    </a>
                    <ul class="nav">
                        <li><a href="/home">Trang chủ</a></li>
                        <li><a href="/study">Học tập</a></li>
                        <li><a href="/classes">Lớp học</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12 text-light">
                                hello
                            </div>

                            <button>a</button>
                            <div class="main-button">
                                <a href=""> asd</a>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->

                </div>
            </div>
        </div>
    </div>

</body>
