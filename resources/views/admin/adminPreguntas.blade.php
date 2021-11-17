@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Preguntas') }}</div>

                <div class="card-body">
                    <form action="{{ url('/admin') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="pregunta" class="col-md-4 col-form-label text-md-right">{{ __('Pregunta') }}</label>

                            <div class="col-md-6">
                                <input id="pregunta" type="text" class="form-control @error('pregunta') is-invalid @enderror" name="pregunta" value="{{ old('pregunta') }}" required autocomplete="pregunta" autofocus>

                                @error('pregunta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <label for="" style="justify-content: center">Ingrese las posibles respuestas</label>
                        <!-- Como minimo se deben de ingresar 2 alternativas a la pregunta -->
                        <!-- OPCION 1 -->
                        <div class="form-group row">
                            <label for="opcion-1" class="col-md-4 col-form-label text-md-right">{{ __('Opcion 1') }}</label>

                            <div class="col-md-6">
                                <input id="opcion-1" type="text" class="form-control @error('opcion-1') is-invalid @enderror" name="opcion-1" value="{{ old('opcion-1') }}" required autocomplete="opcion-1" autofocus>

                                @error('opcion-1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- OPCION 2 -->
                        <div class="form-group row">
                            <label for="opcion-2" class="col-md-4 col-form-label text-md-right">{{ __('Opcion 2') }}</label>

                            <div class="col-md-6">
                                <input id="opcion-2" type="text" class="form-control @error('opcion-2') is-invalid @enderror" name="opcion-2" value="{{ old('opcion-2') }}" required autocomplete="opcion-2" autofocus>

                                @error('opcion-2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
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
