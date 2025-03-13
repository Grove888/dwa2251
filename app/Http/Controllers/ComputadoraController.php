<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //para listar
        $todas = Computadora::all();
        return view('computadora.index',compact('todas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //muestra el formulario para agregar
        return view ('computadora.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //guarda en la base de datos lo nuevo
        echo "Guardar en la base de datos";
        $nuevo = new Computadora();
        $nuevo->marca = $request->marca;
        $nuevo->save();
        return response()->redirectTo(route('computadoras.index'));
    }

    /**
     * Display the specified resource.
     * route model binding
     * CRU
     */
    public function show(Computadora $computadora)
    {
        echo "en show mostramos: ";
        dump($computadora->marca);
        //mostrar la computadora
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computadora $computadora)
    {

        return view('computadora.edit',compact('computadora'));
        //muestro los datos actuales para modificarlos
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computadora $computadora)
    {
//        echo "guardo en la base de datos";
        $computadora->marca = $request->marca;
        $computadora->save();
        return response()->redirectTo(route('computadoras.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computadora $computadora)
    {
        echo "eliminar en la base de datos";
        //reviso si puedo borrar
        $computadora->delete();
        return response()->redirectTo(route('computadoras.index'));

    }
}
