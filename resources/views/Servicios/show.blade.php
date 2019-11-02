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
                        <dt>codigo</dt><dd>{{ $service->id }}</dd>
                        <dt>nombre</dt><dd>{{ $service->name }}</dd>
                        <dt>numero</dt><dd>{{ $service->description }}</dd>
                        <dt>correo</dt><dd>{{ $service->status }}</dd>
                        
                    </dl>
                    <br>  
                    <a href="/" type="button" class="btn btn-danger">regresar</a>
                    <a href="{{ route('servicios.edit', $service->id) }}">Editar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

