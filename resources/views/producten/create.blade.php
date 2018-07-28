@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><strong>Maak nieuw Product aan</strong></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('producten.store') }}">
                        @csrf



                        <div class="form-group row">
                            <label for="naam" class="col-md-4 col-form-label text-md-right">Naam van product</label>

                            <div class="col-md-6">
                                <input id="naam" type="text" class="form-control{{ $errors->has('naam') ? ' is-invalid' : '' }}" name="naam" value="{{ old('naam') }}" required autofocus>

                                @if ($errors->has('naam'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('naam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="prijs" class="col-md-4 col-form-label text-md-right">Prijs van product</label>

                            <div class="col-md-6">
                                <input id="prijs" type="text" class="form-control{{ $errors->has('prijs') ? ' is-invalid' : '' }}" name="prijs" value="{{ old('prijs') }}" required autofocus>

                                @if ($errors->has('prijs'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('prijs') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="producttype_id" class="col-md-4 col-form-label text-md-right">producttype_id </label>

                            <div class="col-md-6">
                                <input id="producttype_id" list="opties" type="text" class="form-control{{ $errors->has('producttype_id') ? ' is-invalid' : '' }}" name="producttype_id" value="{{ old('producttype_id') }}" required autofocus>

                                    <datalist id="opties">
                                       @foreach ($type as $type)
                                       <option value="{{$type->id}}">{{$type->type}}</option>
                                    
                                    @endforeach
                                    </datalist>
                            


                                @if ($errors->has('producttype_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('producttype_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

         <div class="form-group row">
                            <label for="korting" class="col-md-4 col-form-label text-md-right">korting van product</label>

                            <div class="col-md-6">
                                <input id="korting" type="text" class="form-control{{ $errors->has('korting') ? ' is-invalid' : '' }}" name="korting" value="{{ old('korting') }}"  autofocus>

                                @if ($errors->has('korting'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('korting') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">image naam</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" autofocus>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                           <div class="form-group row">
                            <label for="tekstkort" class="col-md-4 col-form-label text-md-right">korte tekst</label>

                            <div class="col-md-6">
                                <textarea id="tekstkort" rows="4" cols="5" class="form-control{{ $errors->has('tekstkort') ? ' is-invalid' : '' }}" name="tekstkort" value="{{ old('tekstkort') }}" required autofocus>
                                </textarea>
                                @if ($errors->has('tekstkort'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tekstkort') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group row">
                            <label for="tekstlang" class="col-md-4 col-form-label text-md-right">Lange omschrijving/tekst</label>

                            <div class="col-md-6">
                            <textarea id="tekstkort" rows="9" cols="5"class="form-control{{ $errors->has('tekstlang') ? ' is-invalid' : '' }}" name="tekstlang" value="{{ old('tekstlang') }}" required autofocus>
                            </textarea>
                                @if ($errors->has('tekstlang'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tekstlang') }}</strong>
                                    </span>
                                @endif
                            </div>
                     </div>

            


                
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Maak
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
