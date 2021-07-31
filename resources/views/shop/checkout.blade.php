@extends('template.user')

@section('title')
    Checkout
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('stl/css/cart.css')}}"> 
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <h4>Alamat Pengiriman</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-controll" placeholder="Nama Lengkap.." required>
                </div>
            </div>
        </div>
    </div>
</div>
