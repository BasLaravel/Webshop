@extends('layouts.app')


@section('content')

 <h1 class="text-center m-3">Overzicht</h1>



<div class="row">
        <div class="col-sm-4 offset-sm-1">
            <h2 class="text-center">Uw Gegevens</h2>
            <ul class="list-group list-group-flush"> 
                <li class="list-group-item">{{$user->voor_naam}}</li>
                <li class="list-group-item">{{$user->achter_naam}}</li>
                <li class="list-group-item">{{$user->email}}</li>
            </ul>

        </div>
        <div class="col-sm-4 offset-sm-2">
            <h2 class="text-center">Winkelwagen</h2>
            <ul class="list-group list-group-flush ">
            @foreach($cart as $cart)
                <li class="list-group-item">{{$cart->total()}}</li>
                <li class="list-group-item">Verzendkosten: 10 euro</li>
                <li class="list-group-item">{{$cart->total()}}</li>
            @endforeach
            </ul>
         </div>
</div>

<div class="row mt-5">
        <div class="col-sm-4 offset-sm-1">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Kies uw Bank</span>
                    </div>
                    <input id="bank" list="opties" type="text" class="" name="bank" value="" required autofocus>
                            <datalist id="opties">
                                 <option value=Rabobank></option>
                                 <option value=ING-Bank></option>
                                 <option value=ABN-AMRO></option>
                                 <option value=KNAP></option>
                                 <option value=Van-Lanschot></option>
                            </datalist>
            </div>    
        </div>
</div>

<p class="fixed-bottom m-b-100"><a class="btn btn-block btn-secondary btn-lg" href="{{url('checkout/save')}}" role="button">Betaal</a></p>
 





@endsection