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
            <h3>Items</h3>
        </div>
    </div>
    @foreach($items as $item)
    <div class="row">
        <div class="col-md-1">
            {{ $item->id }}
        </div>
        <div class="col-md-2">
            {{ $item->name }}
        </div>
        <div class="col-md-1">
            {{ $item->code }}
        </div>
        <div class="col-md-3">
            {{ $item->description }}
        </div>
        <div class="col-md-2">
            {{ $item->category->name }}
        </div>
        <div class="col-md-3">
            <a class="link" href="{{ route('items.detail', ['id' => $item->id]) }}">Detail</a>
            &nbsp;&nbsp;
            <a class="link" href="{{ route('items.update', ['id' => $item->id]) }}">Update</a>
            &nbsp;&nbsp;
            <a class="link" href="{{ route('items.delete', ['id' => $item->id]) }}">Delete</a>
        </div>
    </div>
    <hr>
    @endforeach
        <div class="row">
        <div class="col-md-12">
            <a class="link" href="{{ route('items.create') }}">Create a new item</a>
            <hr>
        </div>
    </div>
@endsection