<?php

namespace pokemon\Http\Controllers;

use Illuminate\Http\Request;

class pokemonController extends Controller
{
    //
    public function index(){
        return view('pokemons.index');
    }
}
