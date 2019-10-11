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
                    <a href="{{ url('/logout') }}"> logout </a>

                    You are logged in!
                    <a href="https://pay.google.com/gp/p/js/pay.js">pay</a>
                    
                    <script async
                     src="https://pay.google.com/gp/p/js/pay.js"
                         onload="onGooglePayLoaded()">
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
