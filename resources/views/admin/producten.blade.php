@extends('layouts.admin')

@section('content')

<h2 class="text-center m-b-50 m-t-25">Toon alle Producten</h2>
<div class="clearfix mb-4 "><a class="btn btn-success btn-lg  float-right " href="{{url('admin/producten/export')}}" role="button">exporteer data</a></div>

<div class="float-right w-75 ">

@php
$i = 1
@endphp

 @foreach($type as $type)


 <h2 class="text-center m-t-10">{{$type->type}}</h2>
<table class="table table-hover ">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naam</th>
      <th scope="col">Prijs</th>
      <th scope="col">Datum aangemaakt</th>
      <th scope="col">Bewerk product</th>
      <th scope="col">Delete product</th>
    </tr>
  </thead>
  <tbody>

    @foreach($producten as $product)
      
       @if($product->producttype_id == $i)
<tr>
  <td>{{$loop->iteration }}</td>
  <td>{{$product->naam}}</td>
  <td>{{$product->prijs}}</td>
  <td>{{$product->created_at->format('d-m-Y H:i')}}</td>
  <td><a href="{{url('producten/'.$product->id.'/edit')}}">Bewerk</a></td>
  <td><a href="{{url('producten/delete/'.$product->id)}}">Delete</a></td>
</tr>

@endif
@endforeach

  </tbody>
</table>
@php
$i++
@endphp
@endforeach
</div>

@endsection