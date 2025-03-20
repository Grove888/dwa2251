<?php

use App\Http\Controllers\ComputadoraController;
use App\Http\Controllers\PuertaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/saludar/{nombre?}",function ($nombre=""){
	echo "hola $nombre";
});

Route::get('login',[PuertaController::class, 'login']);
Route::post('validar',[PuertaController::class, 'validar'])->name('puerta.validar');
Route::get('register',[UsuarioController::class, 'register'])->name('register');
Route::post('register',[UsuarioController::class, 'store'])->name('register.store');

//Route Model Binding
//CRUD
// computadora/crear
// computadora/mostrar/{cual}
// computadora/actualizar/{cual}
// computadora/borrar/{cual}
///----
// GET    computadoras/{computadora}
// POST   computadoras/
// PUT    computadoras/{computadora}
// DELETE computadoras/{computadora}

// // resource('computadoras',ComputadoraController)
// Route::get('computadore/crear',"App\Http\Controllers\ComputadoraController@crear");
// Route::get('computadore/mostrar/{cual}',[ComputadoraController::class, 'mostrar']);
// Route::get('computadore/actualizar/{cual}',[ComputadoraController::class, 'actualizar']);
// Route::get('computadore/borrar/{cual}',[ComputadoraController::class, 'borrar']);
// // 
// // 
// // 
Route::resource("computadoras", ComputadoraController::class);
Route::resource("usuarios", UsuarioController::class);



Route::get('/usuarios/agregar',function (){
    return view('formulario');
});

Route::get('/usuarios/listar',function (){
    return view('lista');
});

Route::get('/usuarios/listado',function (){
    return view('listado');
});