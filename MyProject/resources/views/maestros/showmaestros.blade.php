@extends('layouts.app')

@section('title', 'Pokemon-Maestro')

@section('content')
    <img style="height:200px; width:200px; background-color: #EFEFEF; margin:20px;" src="/imagenes/{{$maestro-> foto}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
    <div class="text-center">
      
        <h5 class="card-title">{{ $maestro-> nombre }}</h5>
        <p class="card-text">{{ $maestro-> descripcion }}</p>
        <a href="/maestros/{{ $maestro-> slug }}/edit" class="btn btn-primary">Editar</a>
        
        
    </div>
    <div class="text-center">
        <form class="form-group" method="POST" action="/maestros/{{ $maestro-> slug }}" >
            @method('DELETE')
            @csrf
        <button style="margin-top:10px;" class="btn btn-danger" type="submit">Eliminar</button>
        </form> 
    </div>
@endsection