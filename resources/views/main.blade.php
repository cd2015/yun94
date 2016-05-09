<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('page-title', 'Welcome home') | Yuunga - The Digital Directory</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Sowed Castelli" name="author">
    <meta content="Yuunga | The Digital Directory" name="description">
    <meta content="Yuunga, Uganda, Kampala, Digital, Directory, Businesses, Address, Connect" name="keywords">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!--[if lte IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--Bootstrap has now been compiled within the app.scss by gulp into app.css--}}
    {{--<link rel="stylesheet" type="text/css" href="/css/app.css"/> --}}
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    {{-- Fonts --}}
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>--}}
    <link href="/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,700" rel="stylesheet" type="text/css">--}}

    <link href="/css/styles.css" rel="stylesheet" type="text/css">
    <link href="favicon.png" rel="apple-touch-icon">
</head>
<body>
<nav class="navigation">
    @section('navigation')
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="{{route('businesses_path')}}">Business</a>
    @show
</nav>
<div class="main-business container">
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

<!-- JavaScripts -->
<script type="text/javascript" src="/js/jquery.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/app.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>