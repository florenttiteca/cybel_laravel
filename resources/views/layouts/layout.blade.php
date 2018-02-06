<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="./favicon.ico" type="image/x-icon">

        <title>Cybel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            @include('cybel.menu')  
        </header>
        <div id="app" class="content full-height">
            @yield('content')
        </div>
        <footer>
            @include('cybel.footer')
        </footer>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
