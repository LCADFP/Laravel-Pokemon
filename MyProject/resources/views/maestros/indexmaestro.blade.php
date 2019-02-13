@extends('layouts.app')

@section('title', 'Pokemon-Maestros')

@section('content')

<div class="row">
    @foreach($maestros as $maestro)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 70px">
            <img style="height:100px; width:100px; background-color: #EFEFEF; margin:20px;" src="imagenes/{{$maestro-> foto}}" class="card-img-top rounded-circle mx-auto d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $maestro-> nombre }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalles</a>
                </div>
            </div>
        </div>
    
    @endforeach 
</div>     

@endsection