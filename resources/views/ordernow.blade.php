@extends('master')
@section("content")
<div class="container">
<div class="custom-product">
<div class="col-sm-15">
</br></br></br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Total</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">$ {{$total}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tax</th>
      <td></td>
      <td></td>
      <td>$ 0</td>
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td></td>
      <td></td>
      <td>$ 10</td>
    </tr>
    <tr>
      <th scope="row">Delivery</th>
      <td></td>
      <td></td>
      <td>{{$total + 10}}</td>
    </tr>
  </tbody>
</table>


<form action="/orderplace" method="POST">
 @csrf
<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <h4> Payment Method </h4>

  <div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash" checked>
  <label class="form-check-label" for="exampleRadios1">
    Online Payment
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="cash">
  <label class="form-check-label" for="exampleRadios2">
    EMI Payment
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="cash">
  <label class="form-check-label" for="exampleRadios2">
    Delivery Payment
  </label>
</div>

</br>
<button class="btn btn-primary" type="submit">Order Now</button>

</form>

</div>
</div>
</div>
</br></br></br>
@endsection

