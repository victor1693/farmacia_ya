<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class alumnosClass extends Controller
{

   public $id;
   public $nombre;
   public $apellido;

   # OBTENEMOS TODOS LOS ALUMNOS
   public function selectAll()
   {
    	$sql = "SELECT * FROM tbl_alumnos";
    	$result = DB::select($sql);
    	$r = array('status' => true,'data' => $result);
    	return $r;
   }

   # OBTENEMOS UN ALUMNO
   public function selectOne()
   {
   	 	$sql = "SELECT * FROM tbl_alumnos WHERE id = " . $this->id;
    	$result = DB::select($sql);
    	$r = array('status' => true,'data' => $result);
    	return $r;
   }

   # CREAMOS UN ALUMNO
   public function create() 
   {
   		$sql = "INSERT INTO tbl_alumnos (nombre,apellido) VALUES('".$this->nombre."','".$this->apellido."');";
    	$result = DB::insert($sql);
    	$r = array('status' => true,'data' => []);
    	return $r;
   }

   # ACTUALIZAMOS UN ALUMNO
   public function update()
   {
   		$sql = "UPDATE tbl_alumnos SET 
   				nombre = '".$this->nombre."', 
   				apellido = '".$this->apellido."'
   				WHERE id = " . $this->id;
    	$result = DB::update($sql);
    	$r = array('status' => true,'data' => []);
    	return $r;
   } 

   # ELIMINAMOS UN ALUMNO
   public function delete()
   {
   		$sql = "DELETE FROM tbl_alumnos WHERE id = " . $this->id;
    	$result = DB::select($sql);
    	$r = array('status' => true,'data' => []);
    	return $r;
   }

}
