{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', "Business - {$business->name}")

@section('main-header')
    {{$business->name}}
@stop

@section('sidebar')@stop
@section('main-content')
    <p>name: {{$business->name}}</p>
    <p>category: {{$business->category}}</p>
    <p>tel_no: {{$business->tel_no}}</p>
    <p>{{$business->mobile_no}}</p>
    <p>{{$business->email}}</p>
    <p>{{$business->website}}</p>
    <p>{{$business->facebook}}</p>
    <p>{{$business->twitter}}</p>
    <p>{{$business->postal_add}}</p>
    <p>location: {{$business->location}}</p>
    <p>{{$business->region}}</p>
    @if($business->about)
        <article>
            about:
            <hr>
            <br/> {!! nl2br($business->about)!!}
            <hr>
        </article>
    @endif
    <p>logo: {{$business->logo}}</p>
    <p>{{$business->rating}}</p>
    <p>{{$business->user_id}}</p>
    <p>{{$business->active}}</p>
    <p>{{$business->created_at}}</p>
    <p>{{$business->updated_at}}</p>
    {!! link_to_route('business_edit_path', 'Edit', [$business->reference], ['class' => ''], $secure='') !!}
@stop