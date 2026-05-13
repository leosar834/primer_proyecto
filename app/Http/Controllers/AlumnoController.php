<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina de alumnos";
    }
    public function create(){
        return "En esta pagina podras crear alumnos";
    }
    public function show($alumno){
        return "Esta es la pagina del alumno {$alumno}";
    }
}
