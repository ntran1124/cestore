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
            <h3>Departments</h3>
        </div>
    </div>
    @foreach($departments as $department)
    <div class="row">
        <div class="col-md-1">
            {{ $department->id }}
        </div>
        <div class="col-md-3">
            {{ $department->name }}
        </div>
        <div class="col-md-6">
            {{ $department->description }}
        </div>
        <div class="col-md-1">
            <a class="link" href="{{ route('departments.update', ['id' => $department->id]) }}">Update</a>
        </div>
        <div class="col-md-1">
            <a class="link" href="{{ route('departments.delete', ['id' => $department->id]) }}">Delete</a>
        </div>
    </div>
    <hr>
    @endforeach
        <div class="row">
        <div class="col-md-12">
            <a class="link" href="{{ route('departments.create') }}">Create a new department</a>
            <hr>
        </div>
    </div>
@endsection