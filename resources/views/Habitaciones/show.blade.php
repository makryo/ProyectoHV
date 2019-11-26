@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalles de registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles</h1>
                    
                    <dl>
                        <dt>Número</dt><dd>{{ $rooms->number }}</dd>
                        <dt>Precio</dt><dd>{{ $rooms->price }}</dd>
                        <dt>Nivel</dt><dd>{{ $rooms->level }}</dd>
                        <dt>Estado</dt><dd>{{ $rooms->state }}</dd>
                        <dt>Tipo de aire</dt><dd>{{ $rooms->air }}</dd>
                        <dt>Implementos</dt><dd>{{ $rooms->implement }}</dd>
                        <dt>Amueblado</dt><dd>{{ $rooms->furniture }}</dd>
                        <dt>Dimensión</dt><dd>{{ $rooms->dimension }}</dd>

                    </dl>
                    <br>  
                    <a href="\" type="button" class="btn btn-danger">Regresar</a>

                    <a href="{{ route('habitacion.edit', $rooms->id) }}" class="boton">Editar</a>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

