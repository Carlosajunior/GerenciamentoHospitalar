<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class controllerPaciente extends Controller
{
    public function cadastrarPaciente(Request $request){
        $paciente = new Paciente;
        $paciente = Paciente::create([
            'nome' => $request -> nome,
            'email' => $request -> email,
            'nome_responsavel'=> $request -> nome_responsavel,                
            'telefone'=> $request -> telefone,
            'cpf'=> $request -> cpf,
            'telefone_responsavel'=> $request -> telefone_responsavel,
            'endereco'=> $request -> endereco,
            'fatorRH' => $request -> fatorRH
        ]);
        return $paciente;        
    } 
}
