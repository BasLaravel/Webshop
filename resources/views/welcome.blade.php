@extends('layouts.app')


@section('content')


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welkom op de webshop!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero leo,
     pellentesque ornare, adipiscing vitae, rhoncus commodo, nulla. Fusce quis ipsum. Nulla neque massa,
      feugiat sed, commodo in, adipiscing ut, est. In fermentum mattis ligula. Nulla ipsum.
       Vestibulum condimentum condimentum augue. Nunc purus risus, volutpat sagittis, lobortis at,
        dignissim sed, sapien. Fusce porttitor iaculis ante. Curabitur eu arcu. Morbi quam purus,
         tempor eget, ullamcorper feugiat, commodo ullamcorper, neque.
         </p>
  </div>
</div>


<div class="card" style="width: 12rem;">
  @auth('admin')
      <button type="button" class="btn btn-dark kaart">X</button>
  @endauth
      <img class="card-img-top" src="{{asset('images/BCH.jpg' )}}" alt="Card image cap">
      <div class="card-body">
         <a href="#" class="btn btn-primary">CryptoCurrencies</a>
       </div>
</div>



    @endsection