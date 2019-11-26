@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Nuevo Menu</h1>
                    <div class="container">
                        <form method="post" action="{{ route('Restaurante.store') }}">
                            {{ csrf_field() }}
                            <br>
                            <input type="text" name="name" placeholder="Nombre" required>
                            <br>
                            <input type="text" name="price" placeholder="Precio" required>
                            <br>
                           
                            <input type="submit" value="Guardar">
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

