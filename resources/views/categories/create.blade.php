@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('categories.createCategory') }}" method="post">
                <div class="form-group">
                    <label for="department_id" class="col-md-2">Department</label>
                    <div class="col-md-10">
                        <select class="form-control" id="department_id" name="department_id">
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="code" class="col-md-2">Code</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="code" name="code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                {{ csrf_field() }}
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Create</button> 
                    <a href="{{ route("categories.index") }}" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection