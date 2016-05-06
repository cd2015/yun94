<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Yuunga | @yield('page-title', 'Yuunga | The Digital Directory')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Sowed Castelli">
    <meta name="description" content="Yuunga | The Digital Directory">
    <meta name="keywords" content="Yuunga, Uganda, Kampala, Digital, Directory, Businesses, Address, Connect">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">-->
    {{--<link rel="stylesheet" type="text/css" href="/css/app.css"/> --}}
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>
    <link rel="apple-touch-icon" href="favicon.png">
</head>
<body>
<nav class="navigation">
    @section('navigation')
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="{{route('businesses_path')}}">business</a>
    @show
</nav>
<div class="container">
    @section('sidebar')
        <p> Welcome {{$name or 'Client'}}. This is the master sidebar.</p>
    @show
    <div class="content">
        <div class="title">
            @yield('main-header')
        </div>

        {{-- Check for Authentication --}}
        @unless (Auth::check())
            <p>You are not signed in.</p>
        @endunless

        @section('main-content')@show
    </div>
</div>
</body>
</html>