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
    {!! Form::model($business, ['url' => 'businesses/'. $business->business_reference, 'method' => 'PATCH']) !!}

    <div class="form-group">
        {!! Form::text('business_name', null, ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::text('category', null,  ['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('about', null,  ['class' =>'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Details', ['class' =>'btn btn-primary'])  !!}
    </div>
    {!! Form::close() !!}
@stop