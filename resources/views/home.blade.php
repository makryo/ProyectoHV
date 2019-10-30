<?php  
use App\Client;
use App\Employee;

$Clients = Client::all();
$Employee = Employee::all();
?>
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
                    <h1>Bienvenido al sistema {{ Auth::user()->name }}</h1>
                    <div class="container">
                   
                    <button type="button" class="btn btn-outline-secondary">habitaciones</button>

                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"    data-target="#clients">
                        Clientes
                    </button>


                      <div class="modal fade" id="clients">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Clientes</h4>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                
                                <table class="table table-striped">

                                    <tr>
                                        
                                        <th>codigo</th>
                                        <th>nombre</th>
                                        <th>telefono</th>
                                        <th>correo</th>
                                        <th>detalle</th>
                                    </tr>   
                                
                                    @foreach($Clients as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->fullname }}</td>
                                            <td>{{ $Lista->cellphone }}</td>
                                            <td>{{ $Lista->email }}</td>
                                            <td><a href="#">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('home.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>








                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#empleados">empleados</button>

                    <div class="modal fade" id="empleados">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Usuarios</h4>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                
                                <table class="table table-striped">

                                    <tr>
                                        
                                        <th>codigo</th>
                                        <th>nombre</th>
                                        <th>telefono</th>
                                        <th>correo</th>
                                        <th>direccion</th>
                                        <th>area</th>
                                        <th>fecha de inicio</th>
                                        <th>salario</th>
                                        <th>detalle</th>
                                    </tr>   
                                
                                    @foreach($Employee as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->fullname }}</td>
                                            <td>{{ $Lista->cellphone }}</td>
                                            <td>{{ $Lista->email }}</td>
                                            <td>{{ $Lista->address }}</td>
                                            <td>{{ $Lista->area }}</td>
                                            <td>{{ $Lista->fech_init }}</td>
                                            <td>{{ $Lista->salario }}</td>
                                            <td><a href="#">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('home.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>

                    <button type="button" class="btn btn-outline-secondary">servicios</button>
                  
  
                  

                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal"    data-target="#myModal">
                        Usuarios
                    </button>


                      <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Usuarios</h4>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                
                                <table class="table table-striped">

                                    <tr>
                                        
                                        <th>codigo</th>
                                        <th>nombre</th>
                                        <th>correo</th>
                                        <th>detalle</th>
                                    </tr>   
                                
                                    @foreach($user as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->name }}</td>
                                            <td>{{ $Lista->email }}</td>
                                            <td><a href="{{ route('home.show', $Lista->id) }}">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('home.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
