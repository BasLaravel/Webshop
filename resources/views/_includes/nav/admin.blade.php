
<div id="sticky-sidebar" class="adminnav m-t-50 rounded position-fixed" style="background-color:lightgray;width:200px;">


<div class="list-group">
<p class="m-l-5 text-center"><strong>Admin-navigatie</strong></p>
  <a class="list-group-item" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt m-r-5"></i>Admin-Dashboard</a>
  
</div>


<div class="list-group">
<p class="m-l-5"><strong><i class="fas fa-cogs m-r-5"></i>Bewerk Product</strong></p>
  <a class="list-group-item" href="{{route('admin.producten')}}">Toon alle producten</a>
  <a class="list-group-item" href="{{route('producten.create')}}">Maak nieuw Product</a>
</div>

<div class="list-group">
<p class="m-l-5"><i class="fas fa-images m-r-5"></i>Images</strong></p>
  <a class="list-group-item" href="{{route('admin.images.upload')}}">Upload een Image</a>
  <a class="list-group-item" href="{{route('admin.images.overzicht')}}">Overzicht Images</a>
</div>


</div>
