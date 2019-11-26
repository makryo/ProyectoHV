@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar Datos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar datos</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('Restaurante.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}
                            <br>
                            <input type="text" name="name" value="{{ $Edita->name }}" required>
                            <br>
                            <input type="text" name="price" value="{{ $Edita->price }}" required>
                            <br>
                          
                        
                            <input type="submit" value="Guardar">
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection