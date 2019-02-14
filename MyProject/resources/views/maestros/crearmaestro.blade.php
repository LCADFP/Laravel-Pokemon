@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    
        <form class="form-group" method="POST" action="/maestros" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" name="descripcion"></textarea>
            </div>

            <div class="form-group">
                <label for="">Foto</label>
                <input class="form-control-file" type="file" name="foto">
            </div>
          <button class="btn btn-danger" type="submit">Guardar</button>
        </form>    

@endsection

