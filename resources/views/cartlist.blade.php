@extends('master')
@section("content")

<div class="custom-product">
<div class="col-sm-10">
<div class="trending-wrapper">
  <h4>Result of Products</h4>
  @foreach($products as $product)
  <div class="row searched-item cart-list-devider">

  <div class="col-sm-4">
  <a href="detail/{{$product->id}}">
  <img src="{{$product->gallery}}"  class="trending-img" >
  </a>
  </div>

  <div class="col-sm-4">
  <div>
  <h2>{{$product->name}}</h2>
  <h5>{{$product->description}}</h5>
  </div>
  </div>

  <div class="col-sm-4">
  <a href="/removecart/{{$product->cart_id}}">
  <button class="btn btn-warning">Remove</button>
  </a>
  </div>

  </div>
  @endforeach
</div>
<a href="ordernow" class="btn btn-primary">Order Now</a>
</div>
</div>

@endsection

