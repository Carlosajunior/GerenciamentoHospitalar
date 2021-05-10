<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class cadastroController extends Controller
{   
    public function criarUsuario(Request $request){
<<<<<<< Updated upstream
        return print("testando controller cadastro");
        //return $request->all();
=======
<<<<<<< HEAD
<<<<<<< HEAD
        return $request->all();
=======
        return print("testando controller cadastro");
        //return $request->all();
>>>>>>> 68fe9fcfbfd50a89141343a7ae0fc8ee1599b579
=======
        return print("testando controller cadastro");
        //return $request->all();
>>>>>>> 68fe9fcfbfd50a89141343a7ae0fc8ee1599b579
>>>>>>> Stashed changes
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