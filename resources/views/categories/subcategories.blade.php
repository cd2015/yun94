{{-- Yuunga Category Layout Module --}}
@extends('main')

@section('page-title', 'Categories')

@section('main-header')
    Sub Categories
@stop

@section('navigation')
    @parent
    <a href="{{route('categories_path')}}">Categories</a>
@stop


@section('sidebar')
    @parent
    <p>
        {!! link_to_route('category_create_path', 'Create Category', [], ['class'=>'',]) !!}
    </p>
@stop

@section('main-content')
    <ul>
        @forelse($subcategories as $subcategory )
            <li>
                {!! link_to_route('category_path', $subcategory['name'], $subcategory['id'], ['class'=>'',]) !!}
            </li>
        @empty
            <p>Look, no Sub Category found</p>
            {!! link_to_route('category_create_path', '+ Add', [], ['class'=>'',]) !!}
        @endforelse
    </ul>
@stop