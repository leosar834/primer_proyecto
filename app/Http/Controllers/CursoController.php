<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina cursos";
    }

    public function create(){
        return "Bienvenido al curso de $curso";
    }

    public function show($curso){
        return "Bienvenido a la pagina $curso";
    }
}
