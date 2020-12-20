<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Go</title>
    <link rel="icon" type="text/css" href="{{asset('frontendtemplate/images/icon3.svg')}}" >

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >

    <div id="app" style="background-image: linear-gradient(45deg, #D2FFFF,#79E7E7, #00AAAA, #007588); height: 50rem;">
       
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
