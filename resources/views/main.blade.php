<!DOCTYPE html>
<html>
<head>
    <title>Yuunga | @yield('page-title', 'Yuunga | The Digital Directory')</title>
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="/css/styles.css"/>

</head>
<body>
<nav class="navigation">
    @section('navigation')
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="{{route('businesses_path')}}">business</a>
        {!! link_to('/sowed', 'sowed is coming', ['class'=>'link', 'id'=>'buttonSowed'], $secure='true') !!}
        {!! link_to_asset('/sowed', 'sowed is coming', ['class'=>'link', 'id'=>'buttonSowed'], $secure='true') !!}
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
