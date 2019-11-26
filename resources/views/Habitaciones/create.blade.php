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
                    <h1>Nueva habitación</h1>
                    <div class="container">
                        <form method="post" action="{{ route('habitacion.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <input type="text" name="number" placeholder="Número" required>
                            <br>
                            <input type="number" name="price" placeholder="Precio" min="0.00" max="10000.00" step="{{ 'Q' }}0.01" required>
                            <br>
                            <input type="text" name="level" placeholder="Nivel" required>
                            <br>
                            <input type="text" name="state" placeholder="Estado" required>
                            <br>
                            <input type="text" name="air" placeholder="Tipo de ventilación" required>
                            <br>
                            <input type="text" name="implement" placeholder="Implementos" required>
                            <br>
                            <input type="text" name="furniture" placeholder="Inmobiliario" required>
                            <br>
                            <input type="text" name="dimension" placeholder="Dimensión" required>
                            <br>
                            <input type="submit" value="Guardar">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
