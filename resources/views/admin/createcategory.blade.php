@extends('template.container')

@section('content')
<form class="mb-4" action="post" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-center mb-4">Create Category</h1>
            <div class="form-group">
                <label for="">Nama Category</label>
                <input type="text" name="name">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
@endsection