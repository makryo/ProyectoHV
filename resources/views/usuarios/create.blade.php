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
                    <h1>Nuevo usuario</h1>
                    <div class="container">
                        <form method="post" action="{{ route('home.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <input type="text" name="name" placeholder="Nombre" required>
                            <br>
                            <input type="email" name="email" placeholder="Email" required>
                            <br>
                            <input type="password" name="password" placeholder="Contraseña" required>
                            <br>
                            <input type="submit" value="Guardar">
                        </form>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection