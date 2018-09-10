<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="homepage-heading">
            <div class="title-wrapper">
                <div class="heading-title">Lorem</div>
                <div class="heading-banner" ></div>
            </div>
        @if(isset($user))
          <div class="auth-container">
                <span class="heading-logout"><a href="logout">Logout</a></span>
          </div>
        @else
            <div class="login-register-wrapper auth-container">
                <span class="heading-login"><a href="login">Login</a></span>/
                <span class="heading-register"><a href="register">Register</a></span>
            </div>
        @endif
        </div>
        @yield('content')
    </div>
</body>
</html>
