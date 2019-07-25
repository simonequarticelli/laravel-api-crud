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

                    You are logged in!<br>
                    <h7>I tuo dati sono:</h7><br>
                    <strong>Nome: </strong>{{ Auth::user()->name }}<br>
                    <strong>Email: </strong>{{ Auth::user()->email }}<br>
                    <strong>Api Token: </strong>{{ Auth::user()->api_token }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
