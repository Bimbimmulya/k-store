@extends('template.container')

@section('content')
    <a href="/create" class="btn btn-primary" style="margin-left:81%">Tambah Produk</a>
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    {{-- <th>Desc</th> --}}
                    <th>Category</th>
                    {{-- <th>Image</th> --}}
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($krismons as $krismon)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$krismon->product_name}}</td>
                  <td>{{"Rp. ".number_format($krismon->price)}}</td>
                  <td>{{$krismon->stock}}</td>
                  {{-- <td>{{$krismon->desc}}</td> --}}
                  <td>{{$krismon->category->name}}</td>
                  {{-- <td width="30%">
				  		<img src="{{ asset('img/'.$krismon->image) }}" height="%" width="50%" class="card-img-top" alt="" srcset=""></td>  --}}
                  <td>
					<a href="/edit/{{$krismon->id}}" class="btn btn-primary">Edit</a> 
					<form action="/delete/{{$krismon->id}}" method="POST">
					@csrf
                    @method("DELETE")
					<button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
{{$krismons->links()}}
@endsection