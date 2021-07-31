@extends('template.user')

@section('title')
    Shop
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('stl/css/shop.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="category">
          <h3 id="category-label">Select Item</h3>
          <ul class="list-group">
            <li class="list-group-item"><a href="/shop">New Arrival</a></li>
            <li class="list-group-item"><a href="/shop">Accessories</a></li>
            <li class="list-group-item"><a href="/shop">Shirt</a></li>
            <li class="list-group-item"><a href="/shop">Tshirt</a></li>
            <li class="list-group-item"><a href="/shop">Outerwear</a></li>
            <li class="list-group-item"><a href="/shop">Pants</a></li>
            <hr class="menu-line"/>
            <li class="list-group-item"><a href="/shop">View All</a></li>
          </ul>
        </div>
        <h2 id="category-label" class="text-center mt-5">Search Product</h2>
        <form action="" class="form-inline ml-3">
          <input type="text" class="form-control" name="search">
          <button class="btn btn-primary">Search</button>
        </form>
      </div>
        <div class="col-lg-9">
          <div class="item-list">
          <h2>Our Products</h2>
          <hr style="margin-bottom: 2em;">
          <div class="row list-product">
            @foreach ($products as $shop)
            <div class="col-lg-4 mt-3">
              <a href="/detail/{{$shop->id}}">
              <img src="{{asset('img/'.$shop->image)}}" alt="nopic" height="180" width="180">
              </a>
              <p class="product-name mt-3 font-weight-bold"><a href="{{asset('img/'.$shop->image)}}">{{$shop->product_name}}</a></p>
              <p class="product-price">Rp.{{number_format($shop->price)}}</p>
            </div>
          @endforeach
          </div>
        </div>
        
        {{$products->links()}}
      </div>
    </div>
  </div>
  <!-- Pagination Link -->
  {{-- {{$items->links()}} --}}
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('stl/js/script.js')}}"></script>
@endsection

