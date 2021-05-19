<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;


class editarController extends Controller
{
    
    public function update(Request $request)
    {
        $usuario = Usuario::firstWhere('id','=',$request->id);
        if($usuario != null){
            if($request -> nome != null)
                $usuario -> nome = $request -> nome;
            if($request -> email != null)
                $usuario -> email = $request->email;
            if($request -> senha != null)
                $usuario -> senha = $request->senha;
            if($request-> telefone != null)
                $usuario -> telefone = $request -> telefone;
            if($request-> cpf != null){
                $usuarioAux = Usuario::firstWhere('cpf','=',$request->cpf);
                $teste = $usuarioAux->cpf;
                if($usuarioAux == null)
                    $usuario -> cpf = $request -> cpf;
                else
                    return print('CPF inválido.');
            }
                $usuario -> cpf = $request -> cpf;
            if($request -> apelido != null){
                $usuarioAux = Usuario::firstWhere('apelido','=',$request->apelido);
                if($usuarioAux == null)
                    $usuario -> apelido = $request -> apelido;
                else
                    return print('Este apelido já está em uso, escolha outro.');
            }                
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
