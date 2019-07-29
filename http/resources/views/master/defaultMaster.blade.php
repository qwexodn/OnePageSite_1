<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/app.css">
        @yield('style')
        <title>@yield('title')</title>
    </head>
    <body>
        <script src="https://kit.fontawesome.com/85cdb436ec.js"></script>
        @yield('body')
        @yield('script')
    </body>
</html>
