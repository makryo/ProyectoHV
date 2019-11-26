@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('habitacion.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}
                            <br>
                            <input type="text" name="number" value="{{ $Edita->number }}" required>
                            <br>
                            <input type="number" name="price" value="{{ $Edita->price }}" min="0.00" max="10000.00" step="{{ 'Q' }}0.01" required>
                            <br>
                            <input type="text" name="level" value="{{ $Edita->level }}" required>
                            <br>
                            <input type="text" name="state" value="{{ $Edita->state }}" required>
                            <br>
                            <input type="text" name="air" value="{{ $Edita->air }}" required>
                            <br>
                            <input type="text" name="implement" value="{{ $Edita->implement }}" required>
                            <br>
                            <input type="text" name="furniture" value="{{ $Edita->furniture }}" required>
                            <br>
                            <input type="text" name="dimension" value="{{ $Edita->dimension }}" required>
                            <br>
                            <input type="submit" name="Guardar" value="Guardar">
                        </form>

                      
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
