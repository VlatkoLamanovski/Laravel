<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Function to get all products from table products and present them.
    public function index(){
        $data = Product::all();
        return view('product' , ['products'=>$data]);
    }

    // Function to get each product by it's id and present in detail page.
    public function detail($id){
        $data = Product::find($id);

        return view('detail' ,['product'=>$data]);
    }

    // Function for make filter or search product by name or some letter. This function use Request http.
    public function search(Request $req){
        $data = Product::where('name' , 'like' , '%'.$req->input('query').'%')->get();
        return view('search' , ['products'=>$data]);
    }


    // Function used for adding products to cart table using the button which is in detail page.
    //This function stores the user ID and the product ID.
    public function addToCart(Request $req){
        if($req->session()->has('user')){
          $cart = new Cart;
          $cart->user_id = $req->session()->get('user')['id'];
          $cart->product_id = $req->product_id;
          $cart->save();

          return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

   // This function is used for presenting the number of products which are added to cart table.
   // It is included in header.blade.php
    static function cartItem(){
      $userId = Session::get('user')['id'];
      return Cart::where('user_id' , $userId)->count();
    }

    //This function is for joining three tables user product and cart , using the id
    // Da moze sekoj user da se logira i samo toj da ima pristam do produktite sto ke se prikazat vo carticka

    public function cartList(){

        $userId = Session::get('user')['id'];

        $products = DB::table('cart')
        ->join('products' , 'cart.product_id' , '=' , 'products.id')
        ->where('cart.user_id' , $userId)
        ->select('products.*' , 'cart.id as cart_id')
        ->get();

        return view('cartlist' , ['products'=>$products]);
}

    //Function for removing product from cart and redirect in the same page

    public function removeCart($id){
        Cart::destroy($id);

        return redirect('cartlist');
    }

    //This function is for ordering products and store in orders table
    //Also calculating the total amount of all products in cartlist
    public function orderNow(){

        $userId = Session::get('user')['id'];

       $total = $products = DB::table('cart')
        ->join('products' , 'cart.product_id' , '=' , 'products.id')
        ->where('cart.user_id' , $userId)
        ->sum('products.price');

        return view('ordernow' , ['total'=>$total]);
}

      // This function will add products in orders table by user_id and product_id.
      //Also will remove data or products from cart table and from cart.blade.php page , and redirect.

      public function orderPlace(Request $req){
          $userId = Session::get('user')['id'];

          $allCart = Cart::where('user_id' , $userId)->get();

          foreach($allCart as $cart){
             $order = new Order;
             $order->product_id = $cart['product_id'];
             $order->user_id = $cart['user_id'];
             $order->status = "pennding";
             $order->payment_method = $req->payment;
             $order->payment_status = "pennding";
             $order->address = $req->address;
             $order->save();

             Cart::where('user_id' , $userId)->delete();
          }
          $req->input();
          return redirect('/');
      }


      //Here we create a function to sho all you orders in myorders page.
      // There is made join of products table and orders table.(products -> id) and (orders -> product_id)

      public function myOrders(){
          $userId = Session::get('user')['id'];

          $orders = DB::table('orders')
          ->join('products' , 'orders.product_id' , 'products.id')
          ->where('orders.user_id' , $userId)
          ->get();

          return view('myorders' , ['orders' => $orders]);
      }
}
