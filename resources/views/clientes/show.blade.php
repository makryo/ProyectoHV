@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles</h1>
                    
                    <dl>
                        <dt>Código</dt><dd>{{ $client->id }}</dd>
                        <dt>Nombre</dt><dd>{{ $client->fullname }}</dd>
                        <dt>Número</dt><dd>{{ $client->cellphone }}</dd>
                        <dt>Email</dt><dd>{{ $client->email }}</dd>
                        <dt>Dirección</dt><dd>{{ $client->address }}</dd>
                    </dl>
                    <br>  
                    <a href="/" type="button" class="btn btn-danger">Regresar</a>
                    
                    <a href="{{ route('reservacion.create') }}" type="button" class="btn btn-success">Nueva reservación</a>

                    <a href="{{ route('cliente.edit', $client->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

