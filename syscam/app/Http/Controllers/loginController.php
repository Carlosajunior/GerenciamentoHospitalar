<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request){
        $apelido = $request -> apelido;
        $senha = $request -> senha;
        $usuario = Usuario::where('apelido', "=", $apelido)->first();
        if($usuario->senha == $senha)
            return print("Login validado com sucesso.") ;
        return print("credenciais inválidos.");
    }
}
