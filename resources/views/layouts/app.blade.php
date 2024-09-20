<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{('css/app.css') }}" rel="stylesheet">
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('componens.navbar')
    <div class="main">
        @yield('content')
        @yield('blog')
        @yield('contact')
    </div>

    @include('componens.footer')

</body>
</html>
