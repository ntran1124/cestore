@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('categories.detail') }}" method="get">
                <div class="form-group">
                    <label for="name" class="col-md-2">Department</label>
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
                <div class="form-group">
                    <label for="created_at" class="col-md-2">Created At</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="created_at" name="created_at"
                            value="{{ $category->description }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label for="updated_at" class="col-md-2">Updated At</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="updated_at" name="updated_at"
                            value="{{ $category->description }}" readonly="readonly">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="col-md-10 col-md-offset-2">
                    <a href="{{ route("categories.index") }}" class="btn btn-primary">Back to Categories</a>
                    &nbsp;&nbsp;&nbsp; 
                    <a href="{{ route("categories.update") }}" class="btn btn-primary">Update this category</a>
                </div>
            </form>
        </div>
    </div>
@endsection