@extends('layouts.app')
@section('content')
<div class="card" style="width: 28rem;">
  <div class="card-body">
    <h5 class="card-title">Bienvenido</h6>
    <p class="card-text">{{ $nombre }}.</p>
    <a href="#" class="btn btn-primary">Ver Informacion</a>
  </div>
</div>
@endsection


