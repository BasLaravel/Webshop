<?php

namespace App\Http\Controllers;
use App\user;
use Cart;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart=Cart::content();

        $id = Auth::id();
       
        $user=User::find($id);

        return view('checkout.index',['cart'=>$cart, 'user'=>$user]);

    }

    public function save()
    {

        $id = Auth::id();
       
        Cart::store($id);
       
        return redirect()->back();

    }



}
