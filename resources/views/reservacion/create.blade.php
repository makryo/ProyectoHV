<?php  

use App\Client;
use App\Rooms;
use App\User;

$habitad = Rooms::all();
$client = Client::all();
$user = User::all(); 
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Nuevo Registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Nueva Reservación</h1>
                    <div class="container">
                        <form method="post" action="{{ route('reservacion.store') }}">
                            {{ csrf_field() }}
                            <label></label><br>
                            <br>

                            <div class="container">
                                <label>Habitacion:</label>
                                <select name="room_id">
                                    @foreach($habitad as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->number }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="container">
                                <label>Fecha de ingreso: </label>
                                <input type="date" name="fech_inicio" required>
                            </div>
                            <br>
                            
                            <div class="container">
                                <label>Fecha de salida: </label>
                                <input type="date" name="fech_fin" required>
                            </div>
                            <br>
                            
                            <div class="container">
                                <label>Cliente:</label>
                                <a href="{{ route('cliente.create') }}" type="button" class="btn btn-success">Nuevo
                                </a>
                                <select name="client_id">
                                    @foreach($client as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->fullname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="container">
                                <label>Atiende: </label>
                                <select name="users_id">
                                    @foreach($user as $Lista)
                                        <option value="{{ $Lista->id }}">
                                            {{ $Lista->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <input type="submit" value="Guardar">
                            <a href="/" class="boton">Página principal</a>
                            <br>
                        </form>
              
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
