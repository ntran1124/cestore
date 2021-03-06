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
            <form action="{{ route('categories.deleteCategory') }}" method="post">
                <div class="form-group">
                    <label for="department_name" class="col-md-2">Department</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="department_name" name="department_name"
                            value="{{ $category->department->name }}" readonly="readonly">
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $category->name }}" readonly="readonly">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="code" class="col-md-2">Code</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="code" name="code"
                            value="{{ $category->code }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $category->description }}" readonly="readonly">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Delete</button> 
                    <a href="{{ route("categories.index") }}" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection