<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;


class editarController extends Controller
{
    
    public function update(Request $request)
    {
        $usuario = Usuario::find($request->id);
        if($usuario != null){
            print($usuario -> nome);
            if($request -> nome != null)
                $usuario -> nome = $request -> nome;
            else if($request -> email != null)
                $usuario -> email = $request->email;
            else if($request -> senha != null)
                $usuario -> senha = $request->senha;
            else if($request-> telefone != null)
                $usuario -> telefone = $request -> telefone;
            else if($request-> cpf != null)
                $usuario -> cpf = $request -> cpf;
            else if($request -> apelido != null)
                $usuario -> apelido = $request -> apelido;
            $usuario->save();
            return print('dados alterados com sucesso.');
        }
        else
            print('não foram encontrados usuários cadastrados com o id informado.');
    }


    //public function edit($id)
    //{
    //    $usuario = Usuario::find($id);
    //    return view('usuario.update', ['user' => $usuario]);
    //}


}
