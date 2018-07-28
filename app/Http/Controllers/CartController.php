<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Cart;
use App\product;

class CartController extends Controller
{
  
    public function index()
    {
        $cart=Cart::content();
   
        return view('cart.index',['data'=>$cart]);

    }

    public function voegtoe($id)
    {
       $product = product::find($id);
       Cart::add(['id'=>$product->id,'name'=>$product->naam, 'qty'=>1,'price'=>$product->prijs,
       'options' => ['image' => $product->image] ]);
    
       return redirect()->back();
    }

   
    public function verwijder($id)
    {
       Cart::remove($id);
       return back();
    }


    public function update($aantal, $id)
    {
     
    Cart::update($id, $aantal);

       return back();
    }







}
