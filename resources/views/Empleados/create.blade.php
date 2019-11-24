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
                            
                            <input type="text" name="email" placeholder="correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="error" required><br>
                            
                            <input type="text" name="address" placeholder="direccion" required><br>
                            
                            <input type="text" name="area" placeholder="area" required><br>
                            
                            <label>Fecha de inicio: </label>                            
                            <input type="date" name="fech_init" placeholder="fecha de inicio" required><br>
                            
                            <label>Salario: </label>

                            <input type="number" name="salario" min="0.00" max="10000.00" step="{{ 'Q' }}0.01" required><br><br>
                            
                            <input type="submit" name="Guardar"><br>
                        
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
