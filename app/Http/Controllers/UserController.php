<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    // Login function . To login in web site , email and pass are actualy created.
    // Just use email and pass and login.
    public function login(Request $req){
       $user = User::where(['email'=>$req->email])->first();

       if(!$user || !Hash::check($req->password , $user->password)){
           return "Username or Password is not Correct !!!";
       }else{
           $req->session()->put('user' , $user);

           return redirect('/');
       }
    }


    // Function for Register. To create account , to save name , email and pass in user table.
    // Then redirect in login page from where you can login in the web site.

    public function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect('/login');
    }
}
