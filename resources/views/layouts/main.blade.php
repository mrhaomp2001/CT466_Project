<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />


    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js">
    </script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>

    {{-- <script src="/build/assets/jquery.js"></script> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @vite(['resources/css/animate.css', 'resources/css/flex-slider.css', 'resources/css/fontawesome.css', 'resources/css/owl.css', 'resources/css/cyborg.css'])
</head>

<body>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="/" class="logo">
                            <h2>Logo</h2>
                        </a>
                        <ul class="nav">
                            <li>
                                <a href="/home">Trang chủ</a>
                            </li>
                            <li>
                                <a href="/study">Học tập</a>
                            </li>
                            <li>
                                <a class="text-center"
                                    href="/classes">Lớp học</a>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <div class="most-popular">
                        @yield('content')
                    </div>

                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/owl-carousel.js', 'resources/js/popup.js', 'resources/js/tabs.js', 'resources/js/custom.js'])

    <script src=""></script>
</body>
