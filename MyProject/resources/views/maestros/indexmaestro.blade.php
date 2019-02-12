@extends('layouts.app')

@section('title', 'Pokemon-Maestros')

@section('content')

<div class="row">
    @foreach($maestros as $maestro)
    
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
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