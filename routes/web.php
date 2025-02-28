<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/saludar",function (){
	echo "hola";
});

Route::get('/usuarios/agregar',function (){
    return view('formulario');
});

Route::get('/usuarios/listar',function (){
    return view('lista');
});

Route::get('/usuarios/listado',function (){
    return view('listado');
});