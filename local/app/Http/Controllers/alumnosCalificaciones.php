<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alumnosCalificaciones extends Controller
{
    private $calificaciones;

    function __construct()
    {
    	$this->calificaciones = new alumnosCalificacionesClass();
    } 
    
   # OBTENEMOS TODOS LOS REGISTROS	
   public function index()
   {
    	 return response()->json($this->calificaciones->selectAll());
   }

   # MOSTRAMOS UN REGISTRO
   public function show($id)
   {	
   		$this->calificaciones->id = $id;
   	 	return response()->json($this->calificaciones->selectOne());
   }

   # CREAMOS UN NUEVO REGISTRO
   public function store(Request $request)
   { 	 
   		$this->calificaciones->id_alumno = $request->alumno;
   		$this->calificaciones->id_asignatura = $request->asignatura;
   		$this->calificaciones->calificacion = $request->calificacion;
   	 	return response()->json($this->calificaciones->create());
   }

   #ACTUALIZAMOS UN REGISTRO
   public function update($id,Request $request)
   {  
   		$this->calificaciones->id = $id;
   		$this->calificaciones->id_alumno = $request->alumno;
   		$this->calificaciones->id_asignatura = $request->asignatura;
   		$this->calificaciones->calificacion = $request->calificacion;
   	 	return response()->json($this->calificaciones->update());
   } 

   #ELIMINAMOS UN REGISTRO
   public function destroy ($id)
   {
   		$this->calificaciones->id = $id;
   	 	return response()->json($this->calificaciones->delete());
   }
}
