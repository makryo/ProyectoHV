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
                    <h1>Nuevo Empleado</h1>
                    <div class="container">
                        <form method="post" action="{{ route('empleado.store') }}">
                            {{ csrf_field() }}
                            <label>Formulario</label><br>
                            <br>
                            <input type="text" name="fullname" placeholder="nombre" required><br>
                            <input type="text" name="cellphone" placeholder="telefono" required><br>
                            <input type="text" name="email" placeholder="correo" required><br>
                            <input type="text" name="address" placeholder="direccion" required><br>
                            <input type="text" name="area" placeholder="area" required><br>
                            <input type="date" name="fech_init" placeholder="fecha de inicio" required><br>
                            <input type="text" name="salario" placeholder="salario" required><br>
                            <input type="submit" name="Guardar"><br>
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
