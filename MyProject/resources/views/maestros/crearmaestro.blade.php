@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    
        <form class="form-group" method="POST" action="/maestros">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>
          <button class="btn btn-danger" type="submit">Guardar</button>
        </form>    

@endsection

