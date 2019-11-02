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
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('habitacion.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}
                            <label>Formulario</label><br>
                            <br>
                            <input type="text" name="number" value="{{ $Edita->number }}"><br>
                            <input type="text" name="price" value="{{ $Edita->price }}"><br>
                            <input type="text" name="level" value="{{ $Edita->level }}"><br>
                            <input type="text" name="state" value="{{ $Edita->state }}"><br>
                            <input type="text" name="air" value="{{ $Edita->air }}"><br>
                            <input type="text" name="implement" value="{{ $Edita->implement }}"><br>
                            <input type="text" name="furniture" value="{{ $Edita->furniture }}"><br>
                            <input type="text" name="dimension" value="{{ $Edita->dimension }}"><br>
                            <input type="submit" name="Guardar"><br>
                        </form>

                      
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection