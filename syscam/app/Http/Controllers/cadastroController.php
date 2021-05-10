<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class cadastroController extends Controller
{   
    public function criarUsuario(Request $request){
        return print("testando controller cadastro");
        //return $request->all();
        // $usuario = User::create([
        //     'nome' => $request -> nome,
        //     'email' => $request -> email,
        //     'senha'=> $request -> senha,
        //     'username'=> $request -> username,
        //     'telefone'=> $request -> telefone,
        //     'cargo'=> $request -> cargo,
        //     'cpf'=> $request -> cpf,
        //     'apelido'=> $request -> apelido,
        // ]);
        // return $usuario;
    }
}