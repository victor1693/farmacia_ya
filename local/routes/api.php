<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnos; 
use App\Http\Controllers\alumnosCalificaciones; 

Route::apiResource('/alumnos', alumnos::class); 
Route::apiResource('/calificaciones', alumnosCalificaciones::class);