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

<body data-sidebar="dark">

    <div class="theBall-outer">
        <div class="theBall"></div>
    </div>
    <canvas class="banner_canvas" id="canvas_banner"></canvas>

    @include('layouts.include.header')

    @include('layouts.include.sidebar')

    <div onmousemove="color_hover(event)">
        @yield('content')
    </div>

    @include('layouts.include.footer')

    @include('layouts.include.foot')

    @yield('scripts')
</body>

</html>
