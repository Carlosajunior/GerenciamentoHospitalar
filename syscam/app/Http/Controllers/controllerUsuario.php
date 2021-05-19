<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\log;
use Illuminate\Http\Request;

class controllerUsuario extends Controller
{
    public function mostrarUsuarios(){
        $array = collect([]);
       foreach (Usuario::all() as $Usuario)
            $array->push($Usuario);
        return($array);
    }

    public function editarCadastro(Request $request)
    {
        $usuario = Usuario::firstWhere('id','=',$request->id);
        if($usuario != null){
            $alteracoes= "Os dados alterados foram: ";
            if($request -> nome != null){
                $alteracoes = $alteracoes."o nome foi alterado de ".(String) $usuario -> nome." para ".(String) $request ->nome;
                $usuario -> nome = $request -> nome;
            }                
            if($request -> email != null){
                $alteracoes = $alteracoes." o email foi alterado de ".(String) $usuario -> email." para ".(String) $request ->email;
                $usuario -> email = $request->email;
            }
            if($request -> senha != null){
                $alteracoes = $alteracoes." a senha foi alterada de ".(String) $usuario -> senha." para ".(String) $request ->senha;
                $usuario -> senha = $request->senha;
            }
            if($request-> telefone != null){
                $alteracoes = $alteracoes." o telefone foi alterado de ".(String) $usuario -> telefone." para ".(String) $request ->telefone;
                $usuario -> telefone = $request -> telefone;
            }
            if($request-> cpf != null){
                $usuarioAux = Usuario::firstWhere('cpf','=',$request->cpf);
                if($usuarioAux == null){
                    $alteracoes = $alteracoes." o CPF foi alterado de ".(String) $usuario -> cpf." para ".(String) $request ->cpf;                
                    $usuario -> cpf = $request -> cpf;
                }
                else
                    return print('CPF inválido.');
            }
            if($request -> apelido != null){
                $usuarioAux = Usuario::firstWhere('apelido','=',$request->apelido);
                if($usuarioAux == null){
                    $alteracoes = $alteracoes." o apelido foi alterado de ".(String) $usuario -> apelido." para ".(String) $request ->apelido;
                    $usuario -> apelido = $request -> apelido;
                }
                else
                    return print('Este apelido já está em uso, escolha outro.');
            }
            $alteracoes = $alteracoes.". Os dados foram alterados em ".\Carbon\Carbon::now()->toDateTimeString();
            $log = log::create([
                'log' => $alteracoes
            ]);
            $log ->save();           
            $usuario->save();
            return print('dados alterados com sucesso.');
        }
        else
            print('CPF inválido.');
        
    }

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
