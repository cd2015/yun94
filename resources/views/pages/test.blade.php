<!DOCTYPE html>
<html>
<head>
    <title>Yuunga | @yield('page-title', 'Yuunga | The Digital Directory')</title>
    <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
<nav class="navigation">
    @section('navigation')
        <a href="/">Home</a>
        <a href="/about">About</a>
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

        {{-- Look up the number of active users --}}
        @if (count($onlineUsers) === 1)
            <p>1 user online</p>
        @elseif (count($onlineUsers) > 1)
            <p>{{count($onlineUsers)}} active users!</p>
        @else
            <p>No user is online!</p>
        @endif

        @foreach ($onlineUsers as $user)
            <ul>
                <li>{{$user}}</li>
            </ul>
        @endforeach

        {{-- Better for each --}}
        @forelse($onlineUsers as $user)
            <ul>
                <li>{{$user}}</li>
            </ul>
        @empty
            <p>Look, no one is online</p>
        @endforelse
    </div>
</div>
</body>
</html>
