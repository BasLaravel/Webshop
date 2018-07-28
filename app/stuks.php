<?php

namespace App;

use Illuminate\Support\Facades\View;
use Cart;

class Stuks 
{
  
 public function __construct(Cart $cart){

    $stuks=$cart::count();
    View::share('countt',$stuks);
    }

}
