<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class cadastroController extends Controller
{   
    public function criarUsuario(Request $request){
        $usuario = new Usuario;
        $usuario = Usuario::create([
            'nome' => $request -> nome,
            'email' => $request -> email,
            'senha'=> $request -> senha,                
            'telefone'=> $request -> telefone,
            'cpf'=> $request -> cpf,
            'apelido'=> $request -> apelido,
            'id_Cargo'=> $request -> id_Cargo
        ]);
        return $usuario;
    }
}