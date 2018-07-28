@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><strong>Upload een image</strong></div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" >
                        @csrf

                            <div class="form-group row">
                      
                                <input id="upload_image" type="file" class="form-control{{ $errors->has('upload_image') ? ' is-invalid' : '' }}" name="upload_image">

                                @if ($errors->has('upload_image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('upload_image') }}</strong>
                                    </span>
                                    
                                @endif
                        </div>
                        <div class="form-group row justify-content-center mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
