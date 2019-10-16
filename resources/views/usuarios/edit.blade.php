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
                    <h1>Nuevo usuario</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('home.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}

                            <label>Formulario</label><br>
                            <br>
                            <input type="text" name="name" value="{{ $Edita->name }}"><br>
                            <input type="text" name="email" value="{{ $Edita->email }}"><br>
                            <input type="password" name="password" value="{{ $Edita->password }}"><br>
                            <input type="submit" name="Guardar"><br>
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
