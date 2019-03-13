<?php

namespace pokemon\Http\Controllers;

use Illuminate\Http\Request;
use pokemon\Pokemon;

class pokemonController extends Controller
{
    //
    public function index(Request $request){
        if($request->ajax()){
            $pokemons = Pokemon::all(); 
            return response()->json($pokemons, 200);
        }
        return view('pokemons.index');
    }
    public function store(Request $request){
        if($request->ajax()){
            $pokemon = new Pokemon();
            $pokemon->nombre = $request->input('nombre');
            $pokemon->imagen = $request->input('imagen');
            $pokemon->save();

            return response()->json([
                "message" => "Pokemon creado correctamente"
            ], 200);

        }
        
    }
}
