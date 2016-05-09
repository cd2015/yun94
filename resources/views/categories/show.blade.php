{{-- Yuunga Category Layout Module --}}

@extends('main')

@section('page-title', "{$category->name} - Category")

@section('main-header')
    {{$category->name}}
@stop

@section('navigation')
    @parent
    <a href="{{route('categories_path')}}">Categories</a>
@stop

@section('sidebar')@stop
@section('main-content')
    <p>name: {{$category->name}}</p>
    <p>{{$category->created_at}}</p>
    <p>{{$category->updated_at}}</p>
    <ul>Sub Categories
        @forelse($subcategories as $subcategory )
            <li>
                {!! link_to_route('category_path', $subcategory['name'], [$subcategory['id']], ['class'=>'',]) !!}
            </li>
        @empty
            <p>Look, no subcategory found</p>
            {{--}{!! link_to_route('sub_category_create_path', '+ Add One', [], ['class'=>'',]) !!}--}}
        @endforelse
    </ul>
    {!! link_to_route('category_edit_path', 'Edit', [$category->id], ['class' => 'btn btn-info']) !!}
    {!! delete_form(['category_delete_path', $category->id],'Delete Category') !!}
@stop