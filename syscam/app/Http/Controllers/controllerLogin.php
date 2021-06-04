<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    public function login(Request $request){
        $apelido = $request -> apelido;
        $senha = $request -> senha;
        $usuario = Usuario::firstWhere('apelido', "=", $apelido);
        if($usuario && $usuario->senha == $senha){
            $token = $usuario->createToken($apelido)->plainTextToken;
            $response = [
                'token' => $token,
                'id_cargo' => $usuario->id_Cargo
            ];
            return response($response);
        }
        return response('credenciais inválidas',401);
    }
}
