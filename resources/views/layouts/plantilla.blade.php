<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<style>
    header{
    text-align: center;
    background-color: gray;
    color: white;
    margin-top:-21px;
    margin-left: -8px;
    margin-right: -8px;
    }

    header a{
        text-decoration:none;
        color: white;
        font-size:25px;
        margin: 10px;
    }
    header a:hover{
        text-decoration: underline;
        color: lightblue;

    }
</style>
<header>
<h1>Primer Proyecto</h1>

<nav>
    <a href="/">Inicio</a>
    <a href="cursos">Cursos</a>
    <a href="alumno">Alumnos</a>
</nav>
</header>

<body>
     @yield('content')
</body>
</html>