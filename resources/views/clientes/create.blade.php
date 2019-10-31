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
                    <h1>Nuevo Cliente</h1>
                    <div class="container">
                        <form method="post" action="{{ route('cliente.store') }}">
                            {{ csrf_field() }}
                            <label>Formulario</label><br>
                            <br>
                            <input type="text" name="fullname" placeholder="nombre"><br>
                            <input type="text" name="cellphone" placeholder="telefono"><br>
                            <input type="text" name="email" placeholder="correo"><br>
                            <input type="text" name="address" placeholder="direccion"><br>
                            <input type="submit" name="Guardar"><br>
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

