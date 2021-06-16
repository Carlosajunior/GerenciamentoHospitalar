<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    public function login(Request $request){
        try{ 
            $apelido = $request -> apelido;
            if($apelido  == null)
                throw new Exception("Apelido não informado.", 400);
           
        }catch(Exception $e){
            $codigoErro = $e ->getCode();
            $mensagem = "Erro inesperado detectado. Tente novamente.";
            if($codigoErro == 400)
                $mensagem = $e->getMessage();
            http_response_code($codigoErro);
            echo $mensagem;
        }
        try{
            $senha = $request -> senha;
            if($senha  == null)
                throw new Exception("Senha não informada.", 400);
            
        }catch(Exception $e){
            $codigoErro = $e ->getCode();
            $mensagem = "Erro inesperado detectado. Tente novamente.";
            if($codigoErro == 400)
                $mensagem = $e->getMessage();
            http_response_code($codigoErro);
            echo $mensagem;
        }        
        try{
            $usuario = Usuario::firstWhere('apelido', "=", $apelido);
            if(!$usuario)
                throw new Exception("O apelido de usuário informado está incorreto.", 400);                
        }catch(Exception $e){
            $codigoErro = $e ->getCode();
            $mensagem = "Erro inesperado detectado. Tente novamente.";
            if($codigoErro == 400)
                $mensagem = $e->getMessage();
            http_response_code($codigoErro);
            echo $mensagem;
        }
        try{
            if($usuario && $usuario->senha == $senha){
                $token = $usuario->createToken($apelido)->plainTextToken;
                $response = [
                    'token' => $token,
                    'id_cargo' => $usuario->id_Cargo
                ];
                return response($response);
            }
            else
                throw new Exception("Senha incorreta.", 400);                
        }catch(Exception $e){
            $codigoErro = $e ->getCode();
            $mensagem = "Erro inesperado detectado. Tente novamente.";
            if($codigoErro == 400)
                $mensagem = $e->getMessage();
            http_response_code($codigoErro);
            echo $mensagem;
        }        
    }
}
