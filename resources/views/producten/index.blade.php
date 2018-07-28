@extends('layouts.app')


@section('content')


<div class="row justify-content-md-center">

   @foreach($product as $product)      
  
    <div class="card col-sm-3 m-4 p-2" >
      <img class="card-img-top mr-auto ml-auto" style="height: 12rem; width:90%;"  src="{{asset('images/producttype/'. $product->image )}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$product->type}}</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/producten/{{ $product->id }}" class="btn btn-primary">{{$product->type}}</a>
        </div>
    </div>
 
     @endforeach
      
</div>







    @endsection