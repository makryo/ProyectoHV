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
                        <dt>Código</dt><dd>{{ $employee->id }}</dd>
                        <dt>Nombre</dt><dd>{{ $employee->fullname }}</dd>
                        <dt>Teléfono</dt><dd>{{ $employee->cellphone }}</dd>
                        <dt>Email</dt><dd>{{ $employee->email }}</dd>
                        <dt>Dirección</dt><dd>{{ $employee->address }}</dd>
                        <dt>Área</dt><dd>{{ $employee->area }}</dd>
                        <dt>Fecha de inicio</dt><dd>{{ $employee->fech_init }}</dd>
                        <dt>Salario</dt><dd>{{ $employee->salario }}</dd>
                    </dl>
                    <br>  
                    <a href="\" type="button" class="btn btn-danger">regresar</a>
                    <a href="{{ route('empleado.edit', $employee->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

