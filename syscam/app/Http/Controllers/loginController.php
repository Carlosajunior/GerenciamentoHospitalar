<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request){
        $apelido = $request -> apelido;
        $senha = $request -> senha;
        $usuario = Usuario::firstWhere('apelido', "=", $apelido);
        if($usuario && $usuario->senha == $senha)
            return true ;
        return false;
    }
}
