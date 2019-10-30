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
                    <h1>Detalle</h1>
                    
                    <dl>
                        <dt>codigo</dt><dd>{{ $client->id }}</dd>
                        <dt>nombre</dt><dd>{{ $client->fullname }}</dd>
                        <dt>correo</dt><dd>{{ $client->email }}</dd>
                    </dl>
                    <br>  
                    <a href="#" type="button" class="btn btn-danger">regresar</a>
                    <a href="#">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

