<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    @include('navbar')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</body>
</html>
