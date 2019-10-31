<?php  
use App\Client;
use App\Employee;
use App\Service;
use App\Rooms;
use App\MenuRestaurant;

$Clients = Client::all();
$Employee = Employee::all();
$Service = Service::all();
$Rooms = Rooms::all();
$Menu = MenuRestaurant::all();

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
                    hola soy el tio gilipollas
                    <div class="container">
                   
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#habitaciones">habitaciones</button>


                    <div class="modal fade" id="habitaciones">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Habitaciones</h4>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                
                                <table class="table table-striped">

                                    <tr>
                                        
                                        <th>numero</th>
                                        <th>precio</th>
                                        <th>nivel</th>
                                        <th>estado</th>
                                        <th>tipo de ventilacion</th>
                                        <th>implementos</th>
                                        <th>mobiliario</th>
                                        <th>dimension</th>
                                        <th>detalle</th>
                                    </tr>   
                                
                                    @foreach($Rooms as $Lista)
                                        <tr>
                                            <td>{{ $Lista->number }}</td>
                                            <td>{{ $Lista->price }}</td>
                                            <td>{{ $Lista->level }}</td>
                                            <td>{{ $Lista->state }}</td>
                                            <td>{{ $Lista->air }}</td>
                                            <td>{{ $Lista->implement }}</td>
                                            <td>{{ $Lista->furniture }}</td>
                                            <td>{{ $Lista->dimension }}</td>
                                            <td><a href="{{ route('habitacion.show', $Lista->id) }}">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('habitacion.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>









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
                                        <th>direccion</th>
                                        <th>detalle</th>
                                    </tr>   
                                
                                    @foreach($Clients as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->fullname }}</td>
                                            <td>{{ $Lista->cellphone }}</td>
                                            <td>{{ $Lista->email }}</td>
                                            <td>{{ $Lista->address }}</td>
                                            <td><a href="{{ route('cliente.show', $Lista->id) }}">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('cliente.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
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
                              <h4 class="modal-title">Empleados</h4>
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
                                            <td><a href="{{ route('empleado.show', $Lista->id) }}">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('empleado.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>







                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#servicios">servicios</button>
                  
                    <div class="modal fade" id="servicios">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Servicios</h4>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                
                                <table class="table table-striped">

                                    <tr>
                                        
                                        <th>codigo</th>
                                        <th>nombre</th>
                                        <th>descripcion</th>
                                        <th>estado</th>
                                        
                                        <th>detalle</th>
                                    </tr>   
                                
                                    @foreach($Service as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->name }}</td>
                                            <td>{{ $Lista->description }}</td>
                                            <td>{{ $Lista->status }}</td>
                        
                                            <td><a href="{{ route('empleado.show', $Lista->id) }}">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('empleado.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                  

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
                        

                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Restaurante">Restaurante</button>
                  
                    <div class="modal fade" id="Restaurante">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Servicios</h4>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                
                                <table class="table table-striped">

                                    <tr>
                                        
                                        <th>codigo</th>
                                        <th>nombre</th>
                                        <th>precio</th>
                                        
                                        <th>detalle</th>
                                    </tr>   
                                
                                    @foreach($Menu as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->name }}</td>
                                            <td>{{ $Lista->price }}</td>
                                            
                                            <td><a href="{{ route('empleado.show', $Lista->id) }}">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('empleado.create') }}" type="button" class="btn btn-success">nuevo</a> 
                                
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
