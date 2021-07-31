@extends('template.container')

@section('content')
<form class="mb-4" action="/update/{{$krismon->id}}" method="POST" enctype="multipart/form-data">
            @csrf
			@method('PATCH')
            <h1 class="text-center mb-4">Edit Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input value="{{$krismon->product_name}}" type="text" class="form-control" name="product_name">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input value="{{$krismon->price}}" type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input value="{{$krismon->stock}}" type="number" class="form-control" name="stock">
            </div>
            <div class="form-group">
                <label for="">Desc</label>
                <input value="{{$krismon->desc}}" type="tex" class="form-control" name="desc">
            </div>
            <div class="form-group">
                <label>Category Product</label>
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
			<div class="form-group">
                <label for="">Image</label>
                <input value="{{$krismon->image}}" type="file" class="form-control" name="image" id="foto" multiple="multiple" onchange="preview_image();" required>
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Update</button>
        </form>
@endsection