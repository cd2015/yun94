{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', "Business - {$business->business_name}")

@section('main-header')
    {{$business->business_name}}
@stop

@section('sidebar')
    <p>EDITING</p>
@stop

@section('main-content')
    {!! Form::model($business) !!}
    {!! Form::text('business_name') !!}
    {!! Form::text('category') !!}
    {!! Form::text('category') !!}
    {!! Form::close() !!}
@stop