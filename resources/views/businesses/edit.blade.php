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
    {!! Form::model($business, ['route' =>['business_path', $business->reference], 'method' => 'PATCH', 'class' =>'form-horizontal']) !!}
    @include('businesses._form')
    @yield('update-button')
    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'route'=>['business_delete_path', $business->reference], 'class' =>'form-inline']) !!}
    <div class="form-group">
        {!! Form::submit('Delete Business', ['class' =>'btn btn-danger'])  !!}
    </div>
    {!! Form::close() !!}
@stop