@extends('layouts.app')

@section('title', 'Pokemon-Maestro')

@section('content')
    <img style="height:200px; width:200px; background-color: #EFEFEF; margin:20px;" src="/imagenes/{{$maestro-> foto}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
    <div class="text-center">
      
        <h5 class="card-title">{{ $maestro-> nombre }}</h5>
        <p class="card-text">{{ $maestro-> descripcion }}</p>
    </div>
@endsection