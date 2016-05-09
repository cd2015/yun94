{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', "Edit Business - {$business->name}")

@section('main-header')
    {{$business->name}}
@stop

@section('sidebar')
    <p>EDITING</p>
@stop

@section('main-content')
    {!! Form::model($business, ['route' =>['business_path', $business->reference], 'method' => 'PATCH', 'class' =>'form-horizontal']) !!}
    @include('businesses._form')
    @yield('update-button')
    {!! Form::close() !!}
@stop