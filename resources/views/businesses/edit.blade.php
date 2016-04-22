{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', "Business - {$business->name}")

@section('main-header')
    {{$business->name}}
@stop

@section('sidebar')
    <p>EDITING</p>
@stop

@section('main-content')
    {!! Form::model($business, ['url' => 'businesses/'. $business->reference, 'method' => 'PATCH', 'class' =>'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::label('logo', 'Logo', ['class' =>'control-label  col-sm-2']) !!}
        <div class=" col-sm-10">
            {!! Form::text('logo', null, ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('name', 'Name', ['class' =>'control-label  col-sm-2']) !!}
        <div class=" col-sm-10">
            {!! Form::text('name', null, ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('category', 'Category', ['class' =>'control-label  col-sm-2']) !!}
        <div class=" col-sm-10">
            {!! Form::text('category', null,  ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('tel_no', 'Mobile', ['class' =>'control-label  col-sm-2']) !!}
        <div class=" col-sm-10">
            {!! Form::number('tel_no', null,  ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('location', 'Location', ['class' =>'control-label  col-sm-2']) !!}
        <div class=" col-sm-10">
            {!! Form::text('location', null,  ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('about', 'About', ['class' =>'control-label  col-sm-2']) !!}
        <div class=" col-sm-10">
            {!! Form::textarea('about', null,  ['class' =>'form-control'])  !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit('Update Details', ['class' =>'btn btn-primary'])  !!}
    </div>
    {!! Form::close() !!}
@stop