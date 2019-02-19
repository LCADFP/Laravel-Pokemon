@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    
        <form class="form-group" method="POST" action="/maestros/{{ $maestro-> slug }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            @include('maestros.formulario')
          <button class="btn btn-danger" type="submit">Guardar</button>
        </form>    

@endsection