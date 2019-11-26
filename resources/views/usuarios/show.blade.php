@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Detalles de registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Detalles</h1>
                    
                    <dl>
                        <dt>Código</dt><dd>{{ $user->id }}</dd>
                        <dt>Nombre</dt><dd>{{ $user->name }}</dd>
                        <dt>Email</dt><dd>{{ $user->email }}</dd>
                    </dl>
                    <br>  
                    <a href="{{ route('home.index') }}" type="button" class="btn btn-danger">Regresar</a>
                    <a href="{{ route('home.edit', $user->id) }}" class="boton">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

