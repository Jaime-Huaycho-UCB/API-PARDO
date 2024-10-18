<?php
namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller{
    public function ingresarUsuario(Request $request){
        $correo = $request->input("correo");
        $contrasena = $request->input("contrasena");
        $query = "INSERT INTO USUARIO(correo,contrasena) VALUES (?,?)";
        $respuesta = DB::insert($query,[$correo,$contrasena]);
        if ($respuesta){
            return response()->json([
                "mensaje" => "se ingreso el usuario"
            ],200);
        }else{
            return response()->json([
                "mensaje" => "erro de ingresar al usuario"
            ],400);
        }
    }

    
}