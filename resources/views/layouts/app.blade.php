<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    @include('layouts.backend-includes.head')
    @yield('head')
</head>

<body data-sidebar="dark">
    @include('layouts.backend-includes.header')

    @include('layouts.backend-includes.sidebar')

    @yield('content')

    @include('layouts.backend-includes.footer')

    @include('layouts.backend-includes.foot')

    @yield('scripts')
</body>

</html>
