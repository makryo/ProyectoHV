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
                    <h1>Reservación Eliminada</h1>
                    <div class="container">
                        <br>
                        <a href="http://127.0.0.1:8000/" class="boton">Página principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection