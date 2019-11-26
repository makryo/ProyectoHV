@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mensaje</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <h1>Datos Actualizados</h1>
                        <br>
                        <br>
                        <a href="http://127.0.0.1:8000/" class="boton">Pagina Principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection