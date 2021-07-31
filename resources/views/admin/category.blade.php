@extends('template.container')

@section('content')
<a href="/create-category" class="btn btn-primary" 
        style="margin-left:81%">Create Category</a>
        <h1>Category</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->name}}</td>
                  <td>
					<a href="#" class="fa fa-edit">Edit</a> 
					<form action="#" method="POST">
					@csrf
                    @method("DELETE")
					<button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection