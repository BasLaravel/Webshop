

<table border=1 class="table" style="width:50%;">

 <thead>
   <tr>
     <th>#</th>
     <th>File-naam</th>
     <th>Path</th>
     <th>Extensie</th>
  
   </tr>
 </thead>
 
@foreach($files as $files)
  
<tr>
 <td>{{$loop->iteration }}</td>
 <td>{{$files->getFilename()}}</td>
 <td>{{$files->getPathname()}}</td>
 <td>{{$files->getExtension()}}</td>
</tr>

@endforeach

</table>