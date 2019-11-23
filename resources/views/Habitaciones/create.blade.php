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
                        <form method="post" action="{{ route('habitacion.store') }}">
                            {{ csrf_field() }}
                            <label>Formulario</label><br>
                            <br>
                            <input type="text" name="number" placeholder="numero" required><br>
                            <input type="text" name="price" placeholder="precio" required><br>
                            <input type="text" name="level" placeholder="nivel" required><br>
                            <input type="text" name="state" placeholder="estado" required><br>
                            <input type="text" name="air" placeholder="tipo de ventilacion" required><br>
                            <input type="text" name="implement" placeholder="implementos" required><br>
                            <input type="text" name="furniture" placeholder="inmobiliario" required><br>
                            <input type="text" name="dimension" placeholder="dimension" required><br>
                            <input type="submit" name="Guardar"><br>
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
