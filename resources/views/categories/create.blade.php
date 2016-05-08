{{-- Yuunga Category Layout Module --}}
@extends('main')

@section('page-title', "Add a new Category")

@section('main-header')
    Add a new Category
@stop

@section('sidebar')
@stop

@section('main-content')
    {!! Form::open(['route' => 'categories_path', 'class' =>'form-horizontal']) !!}
    @include('categories._form',['SubmitButtonText'=>'Create Category', 'SubmitButtonClass'=>'btn-danger'])
    {!! Form::close() !!}
@stop