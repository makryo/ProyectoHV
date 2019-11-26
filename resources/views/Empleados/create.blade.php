@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo Registro</div>

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
                            <br>
                            
                            <input type="text" name="fullname" placeholder="Nombre" required><br>
                            
                            <input type="text" name="cellphone" placeholder="Telefono" required><br>
                            
                            <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="error" required><br>
                            
                            <input type="text" name="address" placeholder="Dirección" required><br>
                            
                            <input type="text" name="area" placeholder="Área" required><br>
                            
                            <label>Fecha de inicio: </label>                            
                            <input type="date" name="fech_init" required><br>
                            
                            <label>Salario: </label>

                            <input type="number" name="salario" min="0.00" max="10000.00" step="{{ 'Q' }}0.01" required><br><br>
                            
                            <input type="submit" value="Guardar"><br>
                        
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
