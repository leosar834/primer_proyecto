<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class);

Route::get('cursos',CursoController::class);

Route::get('cursos/{create}',CursoController::class);

Route::get('users/{curso}', function ($curso) {
    
});