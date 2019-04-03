<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('includes.csslib')
    @include('includes.jslib')
    
    
    


</head>

<body>
    @include('includes.navbar')
    <div class="container">
        @include('includes.messages')
    </div>




    <div id="wrapper">

        @if (Auth::check())
        @include('includes.sidebar')
        @endif

        @yield('home')
        @yield('login')
        @yield('add_user')
        @yield('email')
        @yield('reset')
        @yield('verify')
    </div>


    
</body>

</html>
