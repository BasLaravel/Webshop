@extends('layouts.app')

  @section('content')


<h2 class="m-4">Winkelwagen</h2>

 @if(Cart::count()!="0")
              
<!-- design of cart page  begin -->
<div class="wrapper">
@foreach($data as $pro)
      <div class="cartindexcontainer1">
            <div class="cartindexcontainerflexitem" id="cartindeximage"><img src="{{asset('images/'.$pro->options->image )}}" class="productimage"/></div>
            <div class="cartindexcontainerflexitem" id="cartindexnaam"><strong>{{$pro->name}}</strong></div>
            <div class="cartindexcontainerflexitem" id="cartindexbesturing">
                        <div class="cartindexbesturing" id="cartindexbesturingaantal"><label for="cartindexinputaantal">Aantal</label> <input id="cartindexinputaantal" class="{{$pro->rowId}}" type="text"value="{{$pro->qty}}"></div>
                        <div class="cartindexbesturing" id="cartindexbesturingverwijder"><a href="{{url('cart/verwijder')}}/{{$pro->rowId}}">Verwijder Item</a></div>
                        <div class="cartindexbesturing" id="cartindexbesturingwenslijst">Wenslijst</div>
            
            </div>
            <div class="cartindexcontainerflexitem" id="cartindexproducttotaal">{{$pro->price * $pro->qty}}</div>
      </div>
       @endforeach
      <div class="cartindexcontainer2">
            <div class="cartindexcontainerflexintem" id="cartindexcoupon">  
                  <input type="text">
                  <input type="button" value="Coupon"/></div>

                  <div class="opvulling"></div>
            <div class="cartindexcontainerflexintem" id="cartindextotaalflexitem">
                        <div class="cartindextotaal" id="cartindexsubtotaal">Subtotaal: Euro{{$pro->total()}}</div>
                        <div class="cartindextotaal" id="cartindextotaalzendkosten">Verzendkosten: 10 euro</div>
                        <div class="cartindextotaal" id="cartindextotaal">Totaal Euro{{$pro->total()}}</div>
            </div>
      </div>
      <div>                 
            <a class="btn btn-block btn-secondary btn-lg" href="{{url('producten')}}" role="button">Verder winkelen</a>
           @guest
            <a class="btn btn-block btn-secondary btn-lg" href="{{url('login')}}" role="button">Afrekenen</a>
           @else
            <a class="btn btn-block btn-secondary btn-lg" href="{{url('checkout')}}" role="button">Afrekenen</a>        
          @endguest                 
      </div>
                @else
                  <div class="row">
                        <div class="alert alert-info col-md-4 ml-auto mr-auto text-center" style="height:150px;">Uw Winkelwagen is leeg</div>
                  </div>
                @endif

  <!-- design of cart page  end -->

</div>


@endsection