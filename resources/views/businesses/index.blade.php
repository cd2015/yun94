{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', 'Business')

@section('main-header')
    Businesses
@stop

@section('navigation')
    @parent
    <a href="{{route('categories_path')}}">Categories</a>
@stop

@section('sidebar')
    @parent
    <p>
        {!! link_to_route('business_create_path', 'Add New Business', [], ['class'=>'',]) !!}
    </p>
@stop

@section('main-content')
    @forelse($businesses as $business )
        <ul>
            <li>
                {!! link_to_route('business_path', $business->name, [$business->reference], ['class'=>'',], $secure='') !!}
            </li>
        </ul>
    @empty
        <p>Look, no business found</p>
    @endforelse
@stop