@extends('master')
@section("content")



<div class="container"></div>
 <div class="trending-wrapper">
 <h3>Products In card</h3>
 @foreach($products as $product)
<div class="card" style="width: 15rem;">
  <img src="{{$product['gallery']}}" class="trending-img">
  <div class="card-body">
    <h5 class="card-title">{{$product['name']}}</h5>
    <p class="card-text">{{$product['description']}}</p>
    <h4>{{$product['price']}}</h4>
    <a href="detail/{{$product['id']}}" class="btn btn-primary">Details</a>
  </div>
</div>
@endforeach
</div>
</div>


@endsection

