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
                    <h1>Bienvenido al sistema</h1>
                   
                    <table>

                    <tr>
                        
                        <th>codigo</th>
                        <th>nombre</th>
                        <th>coreo</th>
                        
                    </tr>   
                
                    @foreach($user as $Lista)
                        <tr>
                            
                            <td>{{ $Lista->codigo }}</td>
                            <td>{{ $Lista->name }}</td>
                            <td>{{ $Lista->email }}</td>
                            <td><a href="#">detalle</a></td>
                        </tr>
                    @endforeach
                    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
