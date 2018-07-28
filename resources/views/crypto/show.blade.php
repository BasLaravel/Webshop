@extends('layouts.app')


@section('content')

 <h2>Productinformatie {{$product->naam}}</h2>

  
<!-- design of show product page  begin -->
<div class="wrapper">
    <div class="showcontainer1">
            <div class="showcontainerflexitem" id="showimage"><img src="{{asset('images/'.$product->image )}}" class="showproductimage"/></div>
            <div class="showcontainerflexitem" id="showtekstlang"><strong>{{$product->tekstlang}}</strong></div>
            <div class="showcontainerflexitem" id="showknoppen">
                <div class="inlineflexitem"> 
                    <a class="btn btn-primary" href="{{ url('/cart/add')}}/{{$product->id}}" role="button">Voeg toe aan winkelwagen</a>
                </div>
                <div class="inlineflexitem">    
                    <p><a href="">Voeg toe aan wenslijst</a></p>
                </div>
            </div>
    </div>
</div>             

 
<!--  end --> 

    <div>
            <a class="btn btn-primary" href="{{ url('/cart')}}" role="button">Winkelwagen bekijken</a>
    </div>


      


      
	

    @endsection