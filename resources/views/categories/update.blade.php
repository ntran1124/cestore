@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('categories.updateCategory') }}" method="post">
                <div class="form-group">
                    <label for="department_id" class="col-md-2">Department</label>
                    <div class="col-md-10">
                        <select class="form-control" id="department_id" name="department_id">
                            @foreach($departments as $department)
                                @if ($department->id == $category->department_id)
                                    <option value="{{ $department->id }}" selected>
                                        {{ $department->name }}
                                    </option>
                                @else
                                    <option value="{{ $department->id }}">
                                        {{ $department->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $category->name }}">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="code" class="col-md-2">Code</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="code" name="code"
                            value="{{ $category->code }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $category->description }}">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $category->id }}">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Create</button> 
                    <a href="{{ route("categories.index") }}" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection