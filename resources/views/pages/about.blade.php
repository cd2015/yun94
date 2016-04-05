@extends('main')

@section('page-title', 'About Us')

@section('main-header')
    About Us
@stop

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@stop
