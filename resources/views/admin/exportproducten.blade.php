
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
