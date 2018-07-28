<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Product;
use App\Producttype;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producten=Producttype::all();
  
        return view('Producten.index',['product'=>$producten]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::guard('admin')->user()){ 
            $type =Producttype::all();     
         return view('Producten.create',['type'=>$type]);
        }else return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            'naam' => 'required|max:80',
            'prijs'=> 'required|numeric',
            'producttype_id'=> 'required|numeric|max:2',
            'korting'=> 'numeric',
            'image'=> '',
            'tekstkort'=> 'required|max:300',
            'tekstlang'=> 'required'


        ]);
        $product = new Product;
        $product->naam= request('naam');
        $product->prijs= request('prijs');
        $product->producttype_id= request('producttype_id');
        $product->korting= request('korting');
        $product->image= request('image');
        $product->tekstkort= request('tekstkort');
        $product->tekstlang= request('tekstlang');
        $product->save();
        Session::flash('message', "Het product is succesvol aangemaakt");
        return redirect('admin');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Producten  $Product
     * @return \Illuminate\Http\Response
     */
    public function show($productt)
    {

        $type =Producttype::select('type')->where('id', $productt)->get();
    
        $product=Product::where('producttype_id',$productt)->paginate(15);
        
        return view('producten.show',['product'=>$product, 'types'=>$type]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    //
    public function edit($id)
    {
            $product=Product::find($id);
            $type =Producttype::all();  
         
          return view('producten.edit',['product'=>$product,'type'=>$type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */

  

    public function update(Request $request, $id)
    {

        $this->validate(request(),[
            'naam' => 'required|max:80',
            'prijs'=> 'required|numeric',
            'producttype_id'=> 'required|numeric|max:2',
            'korting'=> '',
            'image'=> '',
            'tekstkort'=> 'required|max:300',
            'tekstlang'=> 'required'
        ]);

        $post = Product::findOrFail($id);
        if($post->update($request->all())){

            Session::flash('message', "De update is succesvol uitgevoerd");
            return redirect('admin');
        }else
        Session::flash('message', "Er heeft zich helaas een fout in het systeem voor gedaan. 
        Probeer het later nog een keer");
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $product = Product::find($id);
         $product->delete();

         Session::flash('message', "Het product is verwijderd.");
         return redirect('admin');

    }

    public function delete($id)
    {
        $id=$id;
        return view('producten.delete',['id'=>$id]);
    }


}
