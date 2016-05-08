{{-- Yuunga Category Layout Module --}}
@extends('main')

@section('page-title', 'Categories')

@section('main-header')
    Categories
@stop

@section('navigation')
    @parent
    <a href="{{route('subcategories_path')}}">Sub Categories</a>
@stop


@section('sidebar')
    @parent
    <p>
        {!! link_to_route('category_create_path', 'Create Category', [], ['class'=>'',]) !!}
    </p>
@stop

@section('main-content')
    <ul>
        @forelse($categories as $category )
            <li>
                {!! link_to_route('category_path', $category->name, [$category->id], ['class'=>'',]) !!}
            </li>
        @empty
            <p>Look, no Category found</p>
            {!! link_to_route('category_create_path', '+ Add', [], ['class'=>'',]) !!}
        @endforelse
    </ul>
@stop