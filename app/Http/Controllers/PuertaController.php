<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PuertaController extends Controller
{
    public function login(){
        return view ("puerta.login");

    }
    public function validar(Request $request){

        //tengo que checar que lo que viene en peticion sea correcto
//        echo "checar si  $request->nombre_usuario tiene $request->clave ";
        $encontrado = Usuario::where('nombre_usuario', $request->nombre_usuario)->first();
        if(is_null($encontrado)){
            echo "ni te conozco";
        }else{
          if( Hash::check($request->clave , $encontrado->clave) ){
            Auth::login($encontrado);
            echo "ok";
          }else{
            echo "no te sabes la clave";
          }
        }
    }
}
