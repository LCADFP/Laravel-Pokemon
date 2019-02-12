@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    <div class="form-group">
        <form action="">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </form>
    </div>
    <button class="btn btn-danger" type="submit">Guardar</button>


@endsection

