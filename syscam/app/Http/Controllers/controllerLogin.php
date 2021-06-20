<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;

class controllerLogin extends Controller
{
    public function login(Request $request){
            $apelido = $request -> apelido;
            $senha = $request -> senha;            
            $usuario = Usuario::firstWhere('apelido', "=", $apelido);           
        try{
            if($usuario && $usuario->senha == $senha){
                $token = $usuario->createToken($apelido)->plainTextToken;
                $response = [
                    'token' => $token,
                    'id_cargo' => $usuario->id_Cargo,
                    'id' => $usuario ->id
                ];
                return response($response);
            }
            else
                throw new Exception("Credenciais inválidas.", 400);                
        }catch(Exception $e){
            $codigoErro = $e ->getCode();
            $mensagem = "Erro inesperado detectado. Tente novamente.";
            if($codigoErro == 400)
                $mensagem = $e->getMessage();
            http_response_code($codigoErro);
        }
        return response($mensagem, $codigoErro);        
    }

    public function logout(Request $request){
        $usuario = Usuario::firstWhere('id', "=", $request->id);
        $usuario->tokens()->where('tokenable_id', "=", $request->id)->delete();
        return 'usuário desconectado.';
    }
}
