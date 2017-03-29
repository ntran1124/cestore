@extends('layouts.master')

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('items.updateItem') }}" method="post">
                <div class="form-group">
                    <label for="manufacturer_id" class="col-md-2">Manufacturer</label>
                    <div class="col-md-10">
                        <select class="form-control" id="manufacturer_id" name="manufacturer_id">
                            @foreach($manufacturers as $manufacturer)
                                @if ($manufacturer->id == $item->manufacturer_id)
                                    <option value="{{ $manufacturer->id }}" selected>
                                        {{ $manufacturer->name }}
                                    </option>
                                @else
                                    <option value="{{ $manufacturer->id }}">
                                        {{ $manufacturer->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>                    
                <div class="form-group">
                    <label for="category_id" class="col-md-2">Category</label>
                    <div class="col-md-10">
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                @if ($category->id == $item->category_id)
                                    <option value="{{ $category->id }}" selected>
                                        {{ $category->name }}
                                    </option>
                                @else
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
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
                            value="{{ $item->name }}">
                    </div>
                </div>                
                <div class="form-group">
                    <label for="code" class="col-md-2">Code</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="code" name="code"
                            value="{{ $item->code }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-md-2">Description</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $item->description }}">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $item->id }}">
                <div class="col-md-10 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">Update</button> 
                    <a href="{{ route("items.index") }}" class="btn btn-primary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection