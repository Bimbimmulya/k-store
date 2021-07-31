@extends('template.container')

@section('content')
<form class="mb-4" action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center mb-4">Create Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name">
                @error('product_name')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price">
                @error('price')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock">
                @error('stock')<span class="text-danger">{{$message}}</span>@enderror
            </div>
            <div class="form-group">
                <label for="">Desc</label>
                <input type="tex" class="form-control @error('desc') is-invalid @enderror" name="desc">
                @error('desc')<span class="text-danger">{{$message}}</span>@enderror
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
                <input type="file" class="form-control" name="image" id="foto" multiple="multiple" onchange="preview_image();" required>    
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
@endsection

