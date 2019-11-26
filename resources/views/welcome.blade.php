<?php  
use App\Client;
use App\Employee;
use App\Rooms;
use App\MenuRestaurant;
use App\Reservacion;
use database\connection;
use resources\views\layouts\ModalClient;
use Illuminate\Support\Facades\DB;

$Clients = Client::all();
$Employee = Employee::all();
$Rooms = Rooms::all();
$Menu = MenuRestaurant::all();
$reserva = DB::select('select reservacions.id, rooms.number, rooms.price, clients.fullname, users.name, fech_inicio, fech_fin 
    from reservacions, clients, rooms, users 
    where reservacions.room_id = rooms.id 
    and reservacions.client_id = clients.id 
    and reservacions.users_id = users.id');

$username = 'debian-sys-maint';
$password = 'ws1SC0JreanoNAJ8';
$database = 'victoria';
$host = 'localhost';

?>
@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body" align="center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Bienvenido al sistema: {{ Auth::user()->name }}</h1>
                    
                    <div class="container">
                   
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#habitaciones">Habitaciones</button>


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
                                        
                                        <th>Número</th>
                                        <th>Precio</th>
                                        <th>Nivel</th>
                                        <th>Estado</th>
                                        <th>Tipo de ventilación</th>
                                        <th>Implementos</th>
                                        <th>Mobiliario</th>
                                        <th>Dimensión</th>
                                        <th>Opción</th>
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
                                            <td>
                                                <button class="boton">
                                                    <a href="{{ route('habitacion.show', $Lista->id) }}">Detalles</a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('habitacion.create') }}" type="button" class="btn btn-success">Nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
                                        
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Dirección</th>
                                        <th>Opción</th>
                                    </tr>   
                                
                                    @foreach($Clients as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->fullname }}</td>
                                            <td>{{ $Lista->cellphone }}</td>
                                            <td>{{ $Lista->email }}</td>
                                            <td>{{ $Lista->address }}</td>
                                            <td>
                                                <button class="boton">
                                                    <a href="{{ route('cliente.show', $Lista->id) }}">Detalles</a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                  
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('cliente.create') }}" type="button" class="btn btn-success">Nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>






                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#empleados">Empleados</button>

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
                                        
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Teléfono</th>
                                        <th>Correo</th>
                                        <th>Dirección</th>
                                        <th>Área</th>
                                        <th>Fecha de inicio</th>
                                        <th>Salario</th>
                                        <th>Opción</th>
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
                                            <td>
                                                <button class="boton">
                                                    <a href="{{ route('empleado.show', $Lista->id) }}">detalles</a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('empleado.create') }}" type="button" class="btn btn-success">Nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
                                        
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Opción</th>
                                    </tr>   
                                
                                    @foreach($user as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->name }}</td>
                                            <td>{{ $Lista->email }}</td>
                                            <td>
                                                <button class="boton">
                                                    <a href="{{ route('home.show', $Lista->id) }}">detalles</a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('home.create') }}" type="button" class="btn btn-success">Nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
                              <h4 class="modal-title">Restaurante</h4>
                              <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                
                                <table class="table table-striped">

                                    <tr>
                                        
                                        <th>codigo</th>
                                        <th>nombre</th>
                                        <th>precio</th>
                                        <th>Opción</th>
                                    </tr>   
                                
                                    @foreach($Menu as $Lista)
                                        <tr>
                                            <td>{{ $Lista->id }}</td>
                                            <td>{{ $Lista->name }}</td>
                                            <td>{{ $Lista->price }}</td>
                                            
                                            <td>
                                                <button class="boton">
                                                    <a href="{{ route('Restaurante.show', $Lista->id) }}">Detalles</a>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                
                                    <a href="{{ route('Restaurante.create') }}" type="button" class="btn btn-success">Nuevo</a> 
                                
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>

                        <br>
                        <br>
                        <br>

                    <h1>Tabla de reservaciones</h1>
                    <br>
                    <div align="left">
                        <h5>Busqueda de reservaciones:</h5>
                    </div>
                    <input id="searchTerm" type="text" onkeyup="doSearch()" class="form-control" size="25" / >

                    <br>

                    <table class="table table-striped" id="datos">

                                    <tr>
                                        
                                        <th>N. Habitación</th>
                                        <th>Precio</th>
                                        <th>Nombre</th>
                                        <th>Atendió</th>
                                        <th>Entrada</th>
                                        <th>Salida</th>
                                        <th>Opciones</th>
                                    </tr>   

                                
                                    @foreach($reserva as $Lista)
                                        <tr>
                                            <td>{{ $Lista->number }}</td>
                                            <td>{{ $Lista->price }}</td>
                                            <td>{{ $Lista->fullname }}</td>
                                            <td>{{ $Lista->name }}</td>
                                            <td>{{ $Lista->fech_inicio }}</td>
                                            <td>{{ $Lista->fech_fin }}</td>
                                            
                                            <td>
                                            <button class="boton">                     
                                                <a href="{{ route('reservacion.edit', $Lista->id) }}" style="color: black">Editar</a>
                                            </button>
                                            <br>
                                            <br>
                                            <form method="post" action="{{ route('reservacion.destroy', $Lista->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Borrar" class="button">
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                     
                                    <tr class='noSearch hide'>

                                        <td colspan="5"></td>

                                    </tr>
                                    </table>
                                    <div align="center">
                                    <a href="{{ route('print') }}" type="button" class="btn btn-outline-dark">Generar pdf</a>
                                 

                                    <a href="{{ route('reservacion.create') }}" type="button" class="btn btn-outline-dark">Nueva reservación</a>
                                    </div> 



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
