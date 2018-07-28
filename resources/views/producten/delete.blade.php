@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><strong>Wilt u dit product verwijderen?</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ url('producten/'.$id)}}">
                        @csrf
                    {{ method_field('DELETE') }}




                     
                
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Delete
                                </button>

                            <a class="btn btn-danger" href="{{ route('admin.dashboard') }}" role="button">Cancel</a>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
