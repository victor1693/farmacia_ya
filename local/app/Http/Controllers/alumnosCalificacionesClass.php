<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class alumnosCalificacionesClass extends Controller
{
   public $id;
   public $id_alumno;
   public $id_asignatura;
   public $id_calificacion;

   # OBTENEMOS TODOS LAS CALIFICACIONES	
   public function selectAll()
   {
    	$sql = "SELECT * FROM tbl_calificaciones";
    	$result = DB::select($sql);
    	$r = array('status' => true,'data' => $result);
    	return $r;
   }

   # OBTENEMOS UNA CALIFICACION
   public function selectOne()
   {
   	 	$sql = "SELECT * FROM tbl_calificaciones WHERE id = " . $this->id;
    	$result = DB::select($sql);
    	$r = array('status' => true,'data' => $result);
    	return $r;
   }

   #AGREBAMOS UNA NUEVA CALIFICACION A UN ALUMNO
   public function create() 
   {
   		$sql = "INSERT INTO tbl_calificaciones (id_alumno,id_asignatura,calificacion) 
   				VALUES('".$this->id_alumno."','".$this->id_asignatura."','".$this->calificacion."');";
    	$result = DB::insert($sql);
    	$r = array('status' => true,'data' => []);
    	return $r;
   }

   # ACTUALIZAMOS UNA CALIFICACION
   public function update()
   {
   		$sql = "UPDATE tbl_calificaciones SET 
   				id_alumno = '".$this->id_alumno."', 
   				id_asignatura = '".$this->id_asignatura."',
   				calificacion = '".$this->calificacion."'
   				WHERE id = " . $this->id;
    	$result = DB::update($sql);
    	$r = array('status' => true,'data' => []);
    	return $r;
   } 

   # ELIMINAMOS UNA CALIFICACION
   public function delete()
   {
   		$sql = "DELETE FROM tbl_calificaciones WHERE id = " . $this->id;
    	$result = DB::select($sql);
    	$r = array('status' => true,'data' => []);
    	return $r;
   }
}
