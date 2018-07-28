<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\product;
use App\producttype;

class AdminController extends Controller
{
    
public function __construct(){
    $this->middleware('auth:admin');
}

public function index(){
    return view('admin.index');
}

public function login(){
    return 'dit is de admin.index pagina';
}


//toon alle producten op pagina
public function toonproducten(){
    
    $producten=Product::all();

    $aantaltype=Producttype::count();
    $type=Producttype::select('type')->get();

    return view('admin.producten',['producten'=>$producten,'type'=>$type, 'aantal'=>$aantaltype]);
}

//exporteer/download alle producten naar een excelsheet
public function exportproducten(){
    
    $producten=Product::all();

    $aantaltype=Producttype::count();
    $type=Producttype::select('type')->get();

    header('Content-Disposition: attachment;filename=export.xls');

    return view('admin.exportproducten',['producten'=>$producten,'type'=>$type, 'aantal'=>$aantaltype]);
}



//upload images naar de public folder
public function upload(Request $request){
    
 if($request->isMethod('post')){

    $this->validate(request(), [

        'upload_image' => 'required|mimes:jpeg,bmp,png,svg'


    ]);

    $test=$request->upload_image->getClientOriginalName(); 
   
  input::file('upload_image')->move('images',$test);

  Session::flash('message', "Uw image is succesvol geupload.");
  return redirect('admin');

 }

    return view('admin.upload');
}





//geeft overzicht van alle images in de public\images folder
public function overzicht(){
    
    $files=File::Files('images');

    return view('admin.imagesoverzicht', ['files'=>$files]);
}


//exporteer/download alle images naar een excelsheet
public function exportimages(){
    
    $files=File::Files('images');

    header('Content-Disposition: attachment;filename=export.xls');

    return view('admin.exportimages',['files'=>$files]);
}


//delete een image
public function deleteimage($name){
  
    File::delete('images/'.$name);

    return redirect()->back();
}



}
