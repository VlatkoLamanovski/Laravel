<?php
   use App\Http\Controllers\ProductController;
   $total = 0;
   if(Session::has('user')){
    $total = ProductController::cartItem();
   }
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="/myorders">Orders</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <form action="/search" class="form-inline">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </ul>
      <li class="nav navbar-nav right">
        <a class="nav-link" href="/cartlist">Cart ({{$total}})</a>
        @if(Session::has('user'))
        <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{Session::get('user')['name']}}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <a href="/logout">  <button class="dropdown-item" type="button">Logout</button> </a>
  </div>
</div>
@else
</li><button class="btn btn-secondary"><a href="/login">Login</a></button></li>
<div class="col-sm-1">
</li><button class="btn btn-secondary"><a href="/register">Register</a></button></li>
</div>
@endif
    </li>

  </div>
</nav>
