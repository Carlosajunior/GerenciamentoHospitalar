<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\Log;
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
                if($usuarioAux == null)            
                    $usuario -> cpf = $request -> cpf;                
                else
                    return print('CPF inválido.');
            }
            if($request -> apelido != null){
                $usuarioAux = Usuario::firstWhere('apelido','=',$request->apelido);
                if($usuarioAux == null)
                    $usuario -> apelido = $request -> apelido;                
                else
                    return print('Este apelido já está em uso, escolha outro.');
            }
            $log = log::create([
                'data_alteracao' => \Carbon\Carbon::now(),
                'nome' => $request-> nome,
                'cpf'=> $request-> cpf,
                'telefone' => $request-> telefone,
                'senha' => $request-> senha,
                'apelido' => $request-> apelido,
                'email' => $request-> email
            ]);
            $log ->save();           
            $usuario->save();
            return $usuario;
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
