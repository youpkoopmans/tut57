<!doctype html>
<html lang="nl">
<head>
    <title></title>
    {{--<link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">--}}
    @include('includes.head')
</head>
<body>
    @include('parts.header')
    @yield('content')
    @include('parts.footer')
    @include('includes.scripts')
</body>
</html>