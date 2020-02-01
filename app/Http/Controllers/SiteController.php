<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kala;

class SiteController extends Controller
{

   public function index(){

    return view('index');

   }
   public function login(){

    return view('auth/login');

   }
   public function register(){

    return view('auth/register');

   }
   public function category(){
    $product=Kala::all();
    // dd($product);
    return view('tem/category')->with('all', $product);

   }

   public function details(){

    return view('tem/details');

   }

public function checkout(){

    return view('tem/checkout');

   }

   public function cart(){

    return view('tem/cart');

   }

   public function confirmation(){

    return view('tem/confirmation');

   }
   public function tracking(){

    return view('tem/tracking');

   }
   public function contact(){

    return view('tem/contact');

   }

}
