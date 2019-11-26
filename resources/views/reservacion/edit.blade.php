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
                <div class="card-header">Editar registro</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Actualizar Reservación</h1>
                    <div class="container">
                    
                        <form method="post" action="{{ route('reservacion.update', $Edita->id) }}">

                            @csrf
                            @method('PATCH')
                            {{ csrf_field() }}
                            <br>
                            
                            <div class="container">
                                <label>Habitacion:</label>
                                <select name="room_id">
                                    @foreach($habitad as $Edita)
                                        <option value="{{ $Edita->id }}">
                                            {{ $Edita->number }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="container">
                                <label>Habitacion:</label>
                                <select name="room_id">
                                    @foreach($habitad as $Edita)
                                        <option value="{{ $Edita->id }}">
                                            {{ $Edita->price }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="container">
                                <label>Fecha de ingreso: </label>
                                <input type="date" name="fech_inicio" value="{{ $Edita->fech_inicio }}" required>
                            </div>
                            <br>

                            <div class="container">
                                <label>Fecha de salida: </label>
                                <input type="date" name="fech_fin" value="{{ $Edita->fech_fin }}" required>
                            </div>
                            <br>

                            <div class="container">
                                <label>Cliente:</label>
                                <select name="client_id">
                                    @foreach($client as $Edita)
                                        <option value="{{ $Edita->id }}">
                                            {{ $Edita->fullname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="container">
                                <label>Atiende: </label>
                                <select name="users_id">
                                    @foreach($user as $Edita)
                                        <option value="{{ $Edita->id }}">
                                            {{ $Edita->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <input type="submit" value="Guardar"><br>
                        </form>

                      
                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection