{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', "Business - {$business->name}")

@section('main-header')
    {{$business->name}}
@stop

@section('sidebar')@stop
@section('main-content')
    <p>{{$business->name}}</p>
    <p>{{$business->category}}</p>
    <p>{{$business->tel_no}}</p>
    <p>{{$business->mobile_no}}</p>
    <p>{{$business->email}}</p>
    <p>{{$business->website}}</p>
    <p>{{$business->facebook}}</p>
    <p>{{$business->twitter}}</p>
    <p>{{$business->postal_add}}</p>
    <p>{{$business->location}}</p>
    <p>{{$business->region}}</p>
    <p>{{$business->about}}</p>
    <p>{{$business->logo}}</p>
    <p>{{$business->rating}}</p>
    <p>{{$business->user_id}}</p>
    <p>{{$business->active}}</p>
    <p>{{$business->created_at}}</p>
    <p>{{$business->updated_at}}</p>
    <a href="{{$business->reference}}/edit">EDIT</a>
@stop