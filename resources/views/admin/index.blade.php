@extends('layouts.admin')

@section('content')

@auth('admin')

@if (Session::has('message'))
<div class="row">
   <div class="alert alert-info col-md-4 ml-auto mr-auto text-center" style="height:150px;">{{ Session::get('message') }}</div>
</div>
@endif

@endauth

@endsection