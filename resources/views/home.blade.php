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
                  <h6>I tuo dati sono:</h6><br>
                  <strong>Nome: </strong>{{ Auth::user()->name }}<br>
                  <strong>Email: </strong>{{ Auth::user()->email }}<br>
                  <strong>Api Token: </strong>{{ Auth::user()->api_token }}

                  <h3>Lista Film</h3>
                  <ul class="movies"></ul>
                </div>
          </div>
      </div>
  </div>
</div>
@endsection
