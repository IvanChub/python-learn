@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 div-1">
            <img src="/Images/logo2.png" width="1110px" height="80px">
            <br>
            <br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <img src="/Images/logo3.png" width="390px">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <br>
                        <p>Cada leccion irá seguida de</p>
                        <p>un cuestionario diseñado para</p>
                        <p>ayudarte a practicar y tetener los</p>
                        <p>conceptos aprendidos. ¿Listo?</p>
                        <p>¡Vamos a empezar!</p>
                    </div>
                </div>
            </div>

            <div class="container padre">
                <div class="hijo">
                    <a href="" class="btn btn-warning" role="button">Aprender</a>
                </div>

                <div class="hijo">
                    <a href="" class="btn btn-warning" role="button">Compilador</a>
                </div>
            </div>
            <br>
            <div class="container padre">
                <div class="hijo">
                    <a class="btn btn-success" role="button" href="{{ url('/admin/create') }}">Evaluación</a>
                </div>

                <div class="hijo">
                    <a href="" class="btn btn-warning" role="button">Resultados</a>
                </div>
            </div>
            <br>
            <br>
            
        </div>
    </div>
</div>
@endsection
