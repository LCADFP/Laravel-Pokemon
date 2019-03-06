@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    
        <form class="form-group" method="POST" action="/maestros" enctype="multipart/form-data">
            @csrf
            
            @include('common.errores')

            @include('maestros.formulario')

          <button class="btn btn-danger" type="submit">Guardar</button>
        </form>    

@endsection

