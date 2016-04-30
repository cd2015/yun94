{{-- Yuunga Business Layout Module --}}
@extends('main')

@section('page-title', 'Business')

@section('main-header')
    Businesses
@stop

@section('sidebar')
    @parent
    <p>
        {!! link_to_route('business_create_path', 'Add New Business', [], ['class'=>'',]) !!}
    </p>
@stop

@section('main-content')
    <ul>
        @forelse($businesses as $business )
            <li>
                {!! link_to_route('business_path', $business->name, [$business->reference], ['class'=>'',], $secure='') !!}
            </li>
        @empty
            <p>Look, no business found</p>
        @endforelse
    </ul>
@stop