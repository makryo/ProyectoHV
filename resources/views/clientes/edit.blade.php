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
                    
                        <form method="post" action="{{ route('cliente.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}
                            <label>Formulario</label><br>
                            <br>
                            <input type="text" name="fullname" value="{{ $Edita->fullname }}"><br>
                            <input type="text" name="cellphone" value="{{ $Edita->cellphone }}"><br>
                            <input type="text" name="email" value="{{ $Edita->email }}"><br>
                            <input type="text" name="address" value="{{ $Edita->address }}"><br>
                            <input type="submit" name="Guardar"><br>
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
