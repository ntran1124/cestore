@extends('layouts.master')

@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{ Session::get('info') }}</p>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h3>Categories</h3>
        </div>
    </div>
    @foreach($categories as $category)
    <div class="row">
        <div class="col-md-1">
            {{ $category->id }}
        </div>
        <div class="col-md-2">
            {{ $category->name }}
        </div>
        <div class="col-md-1">
            {{ $category->code }}
        </div>
        <div class="col-md-3">
            {{ $category->description }}
        </div>
        <div class="col-md-2">
            {{ $category->department->name }}
        </div>
        <div class="col-md-3">
            <a class="link" href="{{ route('categories.detail', ['id' => $category->id]) }}">Detail</a>
            &nbsp;&nbsp;
            <a class="link" href="{{ route('categories.update', ['id' => $category->id]) }}">Update</a>
            &nbsp;&nbsp;
            <a class="link" href="{{ route('categories.delete', ['id' => $category->id]) }}">Delete</a>
        </div>
    </div>
    <hr>
    @endforeach
        <div class="row">
        <div class="col-md-12">
            <a class="link" href="{{ route('categories.create') }}">Create a new category</a>
            <hr>
        </div>
    </div>
@endsection