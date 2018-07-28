

@extends('layouts.app')


@section('content')

dit is van producten/crypto index
<div class="container">
    <div class="row align-items-center justify-content-center">
    {{ $product->links() }}
    </div>
</div>

<div class="container-fluid">
        <div class="parent">
          @foreach($product as $product)
           <div class="child1">{{$product->naam}}
               <p>Type: {{$product->type}}</p>
               <p>Prijs: {{$product->prijs}}</p>
               <p>Prijs: {{$product->symbool}}</p>
               <p>id: {{$product->id}}</p>
               <a href="/producten/{{ $product->id }}">Bestel</a>
           </div>
           @endforeach

@endsection

