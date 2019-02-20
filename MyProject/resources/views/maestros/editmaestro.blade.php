@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    
        <form class="form-group" method="POST" action="/maestros/{{ $maestro-> slug }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="">Nombre</label>
              <input class="form-control" type="text" value="{{ $maestro-> nombre }}" name="nombre">
          </div>
          
          <div class="form-group">
              <label for="comment">Descripcion</label>
              <textarea class="form-control" rows="3" name="descripcion">{{ $maestro-> descripcion }}</textarea>
          </div>
          
          <div class="form-group">
              <label for="">Slug</label>
              <input class="form-control" type="text" value="{{ $maestro-> slug }}" name="slug">
          </div>
          
          <div class="form-group">
              <label for="">Foto</label>
              <input class="form-control-file" type="file" name="foto">
          </div>
          <button class="btn btn-danger" type="submit">Guardar</button>
        </form>    

@endsection