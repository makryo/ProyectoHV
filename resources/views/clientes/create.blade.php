@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear registro</div>

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
                            <br>

                            <input type="text" name="fullname" placeholder="Nombre" required><br>

                            <input type="text" name="cellphone" placeholder="Teléfono" pattern="[0-9]{8}" title="error" required><br>
                            
                            <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="error"  required><br>

                            <input type="text" name="address" placeholder="Dirección" required><br>

                            <input type="submit" value="Guardar"><br>
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

