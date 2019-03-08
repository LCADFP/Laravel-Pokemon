<?php

namespace pokemon\Http\Controllers;

use Illuminate\Http\Request;

class pokemonController extends Controller
{
    //
    public function index(Request $request){
        if($request->ajax()){
            return response()->json([
                ['id' => 1, 'nombre' => 'Pikachu', 'descripcion' => 'Tipo trueno'],
                ['id' => 2, 'nombre' => 'Squirtle', 'descripcion' => 'Tipo agua'],
                ['id' => 3, 'nombre' => 'Charizar', 'descripcion' => 'Tipo fuego'],

            ]);
        }
        return view('pokemons.index');
    }
}
