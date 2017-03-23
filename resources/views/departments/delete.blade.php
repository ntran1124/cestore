@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="alert alert-info">You are deleting the following category.
                <br>If you are sure, click Delete button.
                <br>Otherwise, click Cancel button.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('categories.deleteDepartment') }}" method="post">
                <div class="form-group">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" name="name" 
                            value="{{ $department->name }}" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $department->description }}" disabled>
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $department->id }}">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Delete</button> 
                    <a href="{{ route("departments.index") }}" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection