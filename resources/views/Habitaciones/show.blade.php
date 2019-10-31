@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalle</h1>
                    
                    <dl>
                        <dt>codigo</dt><dd>{{ $rooms->number }}</dd>
                        <dt>nombre</dt><dd>{{ $rooms->price }}</dd>
                        <dt>telefono</dt><dd>{{ $rooms->level }}</dd>
                        <dt>correo</dt><dd>{{ $rooms->state }}</dd>
                        <dt>direccion</dt><dd>{{ $rooms->air }}</dd>
                        <dt>area</dt><dd>{{ $rooms->implement }}</dd>
                        <dt>fecha de inicio</dt><dd>{{ $rooms->furniture }}</dd>
                        <dt>salario</dt><dd>{{ $rooms->dimension }}</dd>

                    </dl>
                    <br>  
                    <a href="\" type="button" class="btn btn-danger">regresar</a>
                    <a href="{{ route('habitacion.edit', $rooms->id) }}">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

