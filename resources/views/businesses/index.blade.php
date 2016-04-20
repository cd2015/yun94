{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', 'Business')

@section('main-header')
    Businesses
@stop

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@stop

@section('main-content')
    @forelse($businesses as $business )
        <ul>
            <li><a href="/businesses/{{$business->business_reference}}">{{$business->name}}</a></li>
        </ul>
    @empty
        <p>Look, no business found</p>
    @endforelse
@stop