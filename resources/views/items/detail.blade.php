@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('items.detail', ['id' => $item->id]) }}" method="get">
                <div class="form-group">
                    <label for="manufacturer_name" class="col-md-2">Manufacturer</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="manufacturer_name" name="manufacturer_name"
                            value="{{ $item->manufacturer->name }}" readonly="readonly">
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="category_name" class="col-md-2">Category</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="category_name" name="category_name"
                            value="{{ $item->category->name }}" readonly="readonly">
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="name" class="col-md-2">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $item->name }}" readonly="readonly">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="code" class="col-md-2">Code</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="code" name="code"
                            value="{{ $item->code }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $item->description }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label for="created_at" class="col-md-2">Created At</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="created_at" name="created_at"
                            value="{{ $item->created_at }}" readonly="readonly">
                    </div>
                </div>
                <div class="form-group">
                    <label for="updated_at" class="col-md-2">Updated At</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="updated_at" name="updated_at"
                            value="{{ $item->updated_at }}" readonly="readonly">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $item->id }}">
                <div class="col-md-10 col-md-offset-2">
                    </br>
                    <a href="{{ route("items.index") }}" class="link">Back to Items</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ route('items.update', ['id' => $item->id]) }}" class="link">Update this item</a>
                    </br></br>
                </div>
            </form>
        </div>
    </div>
@endsection