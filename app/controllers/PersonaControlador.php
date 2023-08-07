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

}
