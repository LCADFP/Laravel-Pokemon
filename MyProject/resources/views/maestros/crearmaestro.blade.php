@extends('layouts.app')

@section('title', 'PokemonGO')

@section('content')


    
        <form class="form-group" method="POST" action="/maestros" enctype="multipart/form-data">
            @csrf
            
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>

              </div>
            @endif

            @include('maestros.formulario')

          <button class="btn btn-danger" type="submit">Guardar</button>
        </form>    

@endsection

