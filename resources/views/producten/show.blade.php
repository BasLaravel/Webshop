@extends('layouts.app')


@section('content')

 <h1 class="text-center m-3">Productinformatie @foreach($types as $test) {{$test->type}} @endforeach</h1>


<div class="row align-items-center justify-content-center">
{{ $product->links() }}
</div>

<div class="row justify-content-md-center">

@foreach($product as $product)      

 <div class="card col-sm-2 m-4 p-2">
   <img class="card-img-top mr-auto ml-auto" style="height: 8rem; width:90%;"  src="{{asset('images/'. $product->image )}}" alt="Card image cap">
     <div class="card-body">
       <h5 class="card-title">{{$product->naam}}</h5>
       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
       <p class="card-text">Prijs: {{$product->prijs}}</p>
       <p class="card-text">id: {{$product->id}}</p>
       <p class="card-text"><a href="{{ url('/cart/add/'.$product->id)}}" class="btn btn-primary">Bestel</a></p>
     </div>
 </div>

  @endforeach
   
</div>



@endsection
      
