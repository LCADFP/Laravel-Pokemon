<?php

namespace pokemon\Http\Controllers;

use pokemon\Maestro;
use Illuminate\Http\Request;

class maestroscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maestros = Maestro::all();
        return view('maestros.indexmaestro', compact('maestros'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('maestros.crearmaestro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/', $nombre);
            
        }
        //return $request; con esto vemos que informacion esta tomando.
     
        // return $request->all(); //para obtener todos los datos
       $maestro= new Maestro(); //instanciamos la variable maestro con nuestro modelo Maestro.
        $maestro->nombre = $request->input('nombre');
        $maestro->descripcion = $request->input('descripcion');
        $maestro->foto = $nombre;
        $maestro->save();
        return 'maestro guardado';
        //return $request->input('nombre'); //nos permite elegir el dato que necesitemos.
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Maestro $maestro)  //recibimos el modelo, y vmaos a utilizar la variable $maestro
    {
       
        //$maestro = Maestro::find($id);
      // $maestro = Maestro::where("slug","=","$slug")->firstOrFail(); 
       return view ('maestros.showmaestros', compact('maestro'));  //con compact le decimos comparta la informacion con nuestras vistas. le damos el nombre de nuestra variable en este caso es $maestro.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Maestro $maestro)
    {
        return view ('maestros.editmaestro', compact('maestro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maestro $maestro)
    {

        //return $request; //me permite ver los datos que esta tomando para actualizarlos en la BD
        $maestro->fill($request->except('foto'));
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $nombre = time().$file->getClientOriginalName();
            $maestro->foto = $nombre;
            $file->move(public_path().'/imagenes/', $nombre);
            
        }
        $maestro->save();
        return 'Datos actualizados correctamente';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
