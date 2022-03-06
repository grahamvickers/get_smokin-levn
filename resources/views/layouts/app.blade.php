<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Get Smokin'</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>


    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('images/favicon-16x16.png') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/rau6bmr.css">
    

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div>
        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset ('js/main.js')}}"></script>

</body>
</html>
