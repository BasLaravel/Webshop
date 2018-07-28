@extends('layouts.admin')

@section('content')

<h2 class="text-center m-b-50 m-t-25">Overzicht geuploade Images</h2>
<div class="clearfix mb-5 "><a class="btn btn-success btn-lg  float-right " href="{{url('admin/images/export')}}" role="button">exporteer data</a></div>

 <div class="float-right w-75 ">

<table class="table table-hover ">

 <thead>
   <tr>
     <th scope="col">#</th>
     <th scope="col">File-naam</th>
     <th scope="col">Path</th>
     <th scope="col">Extensie</th>
     <th scope="col">Image</th>
     <th scope="col">Delete</th>
  
   </tr>
 </thead>
 <tbody>


@foreach($files as $files)
  
<tr>
 <td>{{$loop->iteration }}</td>
 <td>{{$files->getFilename()}}</td>
 <td>{{$files->getPathname()}}</td>
 <td>{{$files->getExtension()}}</td>
 <td><img class="vergroot" style="height: 4rem; width:4rem; cursor:all-scroll;"  src="{{asset($files->getPathname())}}" alt="Image"></td>
 <td><a href="{{url('admin/images/overzicht/delete/'. $files->getFilename())}}"
      onclick="event.preventDefault();
      var r=confirm('Weet u zeker dat u deze afbeelding wilt verwijderen?');
      if(r==false){
        return false; 
      }else{ document.getElementById('{{$files->getFilename()}}').submit();}
      ">
 Delete</a></td>
<form id="{{$files->getFilename()}}" action="{{url('admin/images/overzicht/delete/'. $files->getFilename())}}" method="GET" style="display: none;">
        @csrf
  </form>
 
</tr>
@endforeach
@endsection
  
</div>