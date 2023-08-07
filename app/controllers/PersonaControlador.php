<?php 

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Persona;

class PersonaControlador extends Controller{

    public function index(){
        $datosPersona = Persona::all();
        response()->json($datosPersona);
    }

    public function consultar($id){
        $datosPersona = Persona::find($id);
        response()->json($datosPersona);
    }

    public function agregar(){
        $persona = new Persona();
        $persona->nombre = app()->request()->get('nombre');
        $persona->apellido = app()->request()->get('apellido');
        $persona->save();
    }

    public function borrar($id){
        Persona::destroy($id);
        response()->json(["message" => "El registro ".$id." se ha eliminado"]);
    }

    public function actualizar($id){
        $nombre = app()->request()->get('nombre');
        $apellido = app()->request()->get('apellido');

        $persona = Persona::findOrFail($id);

        //Compruebo que no venga vacios, si no viene, no se actualiza.
        $persona->nombre =($nombre!="")?$nombre:$persona->nombre;
        $persona->apellido =($apellido!="")?$apellido:$persona->apellido;
        
        $persona->update();
        response()->json(["message" => "El registro ".$id." se ha actualizado"]);
    }
    
    public function mayoresDe($edad){
        $personas = Persona::where('edad', $edad)->get();
        response()->json($personas);

    }






}
