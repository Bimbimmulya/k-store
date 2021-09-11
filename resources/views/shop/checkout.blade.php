@extends('template.user')

@section('title')
    Checkout
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('stl/css/cart.css')}}"> 
@endsection

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8">
        <h4><b>Billing Details</b></h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-controll" placeholder="Nama Lengkap.." required>
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-controll" placeholder="Street Address" required>
                </div>
                <div>
                <h4><b>Ongkos Kirim</b></h4>
                        <div class="form-group">
                            <select name="provinsi" id="provinsi" value="" class="form-control-sm">
                                <option value="">Pilih Porivinsi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="daerah" id="daerah" class="form-control-sm">
                            <option value=''>--Pilih Kab/Kota--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="ekspedisi" id="ekspedisi" class="form-control-sm">
                            <option value=''>--Pilih Ekspedisi--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="hasil" id="hasil" class="form-control-sm">
                            <option value=''>--Pilih Ongkir--</option>
                            </select>
                        </div> 
                        <b>Phone</b>
                        <div class="form-group">
                            <input type="text" name="name" class="form-controll" placeholder="" required>
                        </div>
                        <b>Emal Address</b>  
                        <div class="form-group">
                            <input type="text" name="name" class="form-controll" placeholder="" required>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h4><b>Payment</b></h4>
            <h6 class="alert alert-dark">
                Make your payment directly into our bank account. Please use your Order ID 
                as the payment reference. 
                Your order won’t be shipped until the funds have cleared in our account.
                Please confirm your payment before 8 hours, or this order will be canceled.
                If you already make a payment. Please confirm it through this link Payment Confirmation.
            </h6>
            <button type="submit" class="btn btn-primary btn-bloc" name="checkout">PLACE ORDER</button>
        </div>
    </div>
    

@endsection