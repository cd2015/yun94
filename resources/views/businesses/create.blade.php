{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', "Yuunga - Add a new Business")

@section('main-header')
    Add a new Business
@stop

@section('sidebar')
@stop

@section('main-content')
    {!! Form::open(['route' => 'businesses_path', 'class' =>'form-horizontal']) !!}
    @include('businesses._form')
    @yield('add-button')
    {!! Form::close() !!}
@stop