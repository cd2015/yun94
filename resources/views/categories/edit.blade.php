{{-- Yuunga Category Layout Module --}}
@extends('main')

@section('page-title', "Edit Category {$category->name}")

@section('main-header')
    {{$category->name}}
@stop

@section('sidebar')
    <p>EDITING</p>
@stop

@section('main-content')
    {!! Form::model($category, ['route' =>['category_path', $category->id], 'method' => 'PATCH', 'class' =>'form-horizontal']) !!}
    @include('categories._form',['SubmitButtonText'=>'Update Category', 'SubmitButtonClass'=>'btn-info'])
    {!! Form::close() !!}
@stop