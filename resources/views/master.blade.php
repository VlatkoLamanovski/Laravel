<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Web</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<body>

    {{ View::make('header') }}
      @yield('content')
    {{ View::make('footer') }}

</body>


<style>
.custom-login{
    height: 400px;
    padding-top: 100px;
}

.custom-product{
    height: 500px !important;
}
img.slider-img{
    height: 400px !important;
}


.trending-img{
    height:200px;
}

.card{
    float: left;
    width: 20%;
}

.trending-wrapper{
    margin:50px;
}
.detail-img{
   height:200px;
}

.cart-list-devider{
    border-bottom:1px solid #ccc;
    margin-bottom: 20px;
    padding-bottom:20px;
}
</style>


</html>
