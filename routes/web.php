<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlumnoController;

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index');
    Route::get('cursos/create','create');
    Route::get('cursos/{curso}','show');
});

Route::controller(AlumnoController::class)->group(function(){
    Route::get('alumno','index');
    Route::get('alumno/create','create');
    Route::get('alumno/{alumno}','show');
});