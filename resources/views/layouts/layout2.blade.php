<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Axtra HTML5 Template">
    <title>@yield('title', 'The Ridgeline Marketing')</title>

    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/imgs/portfolio/1.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="../../../css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @include('layouts.include.head')
    @yield('head')
    <script>
        window.ga = window.ga || function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        ga('create', 'UA-105392568-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="dark">
    <!-- Cursor Animation -->
    {{-- <div class="cursor1"></div>
    <div class="cursor2"></div> --}}
    <div class="theBall-outer">
        <div class="theBall"></div>
    </div>
    <canvas class="banner_canvas" id="canvas_banner"></canvas>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loading">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
        </div>
    </div>

    <!-- Switcher Area Start -->
    {{-- <div class="switcher__area">
        <div class="switcher__icon">
            <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
            <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="switcher__items">
            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">Cursor</h2>
                </div>
                <div class="switcher__btn">
                    <select name="cursor-style" id="cursor_style">
                        <option value="1">default</option>
                        <option selected="" value="2">animated</option>
                    </select>
                </div>
            </div>

            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">mode</h2>
                </div>
                <div class="switcher__btn mode-type wc-col-2">
                    <button data-mode="light">light</button>
                    <button class="active" data-mode="dark">dark</button>
                </div>
            </div>

            <div class="switcher__item">
                <div class="switch__title-wrap">
                    <h2 class="switcher__title">Language Support</h2>
                </div>
                <div class="switcher__btn lang_dir wc-col-2">
                    <button class="active" data-mode="ltr">LTR</button>
                    <button data-mode="rtl">RTL</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Switcher Area End -->

    <!-- Scroll Smoother -->
    <div class="has-smooth" id="has_smooth"></div>

    <!-- Go Top Button -->
    <button id="scroll_top" class="scroll-top">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    <!-- Header area start -->
    <header class="header__area-2">
        <div class="header__inner-5">
            <div class="header__logo-5">
                {{-- <a href="index.html" class="logo-dark"><img
                        src="{{ asset('frontend/assets/imgs/logo/logo-black.png') }}" alt="Site Logo" /></a>
                <a href="index.html" class="logo-light"><img
                        src="{{ asset('frontend/assets/imgs/logo/site-logo-white-2.png') }}" alt="Site Logo" /></a> --}}
                        <div class="title shape-circle text-white fw-bold ">SHAHZAIB</div>
            </div>
            <div class="header__nav-icon-5">
                <button id="open_offcanvas">
                    <span class="menu-text-pp">Menu</span><img
                        src="{{ asset('frontend/assets/imgs/icon/menu-black.png') }}" alt="Menubar Icon" />
                </button>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    @include('layouts.include.sidebar')

    <div onmousemove="color_hover(event)">
        @yield('content')
    </div>

    @include('layouts.include.footer')

    @include('layouts.include.foot')

    @yield('scripts')
</body>

</html>
