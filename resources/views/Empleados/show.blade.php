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
                        <dt>codigo</dt><dd>{{ $employee->id }}</dd>
                        <dt>nombre</dt><dd>{{ $employee->fullname }}</dd>
                        <dt>telefono</dt><dd>{{ $employee->cellphone }}</dd>
                        <dt>correo</dt><dd>{{ $employee->email }}</dd>
                        <dt>direccion</dt><dd>{{ $employee->address }}</dd>
                        <dt>area</dt><dd>{{ $employee->area }}</dd>
                        <dt>fecha de inicio</dt><dd>{{ $employee->fech_init }}</dd>
                        <dt>salario</dt><dd>{{ $employee->salario }}</dd>
                    </dl>
                    <br>  
                    <a href="\" type="button" class="btn btn-danger">regresar</a>
                    <a href="{{ route('empleado.edit', $employee->id) }}">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

