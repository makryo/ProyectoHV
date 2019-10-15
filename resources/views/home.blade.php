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

                    <button type="button" class="btn btn-outline-secondary">clientes</button>

                    <button type="button" class="btn btn-outline-secondary">empleados</button>

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
                                            <td><a href="#">detalle</a></td>
                                        </tr>
                                    @endforeach
                                    
                                    </table>
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">

                                <button type="button" class="btn btn-success">nuevo</button>
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
