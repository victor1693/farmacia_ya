<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
class alumnos extends Controller
{	

    private $alumno;

   function __construct()
    {
    	$this->alumno = new alumnosClass();
    } 
    
   # OBTENEMOS TODOS LOS REGISTROS	
   public function index()
   {
    	 return response()->json($this->alumno->selectAll());
   }

   # MOSTRAMOS UN REGISTRO
   public function show($id)
   {	
   		$this->alumno->id = $id;
   	 	return response()->json($this->alumno->selectOne());
   }

   # CREAMOS UN NUEVO REGISTRO
   public function store(Request $request)
   { 	 
   		$this->alumno->nombre = $request->nombre;
   		$this->alumno->apellido = $request->apellido;
   	 	return response()->json($this->alumno->create());
   }

   #ACTUALIZAMOS UN REGISTRO
   public function update($id,Request $request)
   {  
   		$this->alumno->id = $id;
   		$this->alumno->nombre = $request->nombre;
   		$this->alumno->apellido = $request->apellido;
   	 	return response()->json($this->alumno->update());
   } 

   #ELIMINAMOS UN REGISTRO
   public function destroy ($id)
   {
   		$this->alumno->id = $id;
   	 	return response()->json($this->alumno->delete());
   }
}
