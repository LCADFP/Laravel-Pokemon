@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    
        <form class="form-group" method="POST" action="/maestros" enctype="multipart/form-data">
            @csrf
            @include('maestros.formulario')
          <button class="btn btn-danger" type="submit">Guardar</button>
        </form>    

@endsection

