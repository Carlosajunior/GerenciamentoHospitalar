<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Prontuario;
use App\Models\Medicamento;
use App\Models\agendamento_medicacao;

class controllerEnfermeiro extends Controller
{
    //---------------------------------------------------------------------------------
    public function verificarAgendamento (){   
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $Agendamento_medicacao)
            $array->push($Agendamento_medicacao);
        return($array);
    }

    //----------------------------------------------------------------------------------
    public function prepararMedicacao(Request $request){
        $preparo = new Medicamento;
        $preparo = Medicamento::firstWhere('id','=',$request->id);
        if($preparo != null){
            if($request -> lote != null)
                $preparo -> lote = $request -> lote;
            if($request -> quantidade != null)
                $preparo -> quantidade = $request -> quantidade;
            if($request -> nome != null)
                $preparo -> nome = $request -> nome;
            if($request -> id_baixaMedicamento != null)
                $preparo -> id_baixaMedicamento = $request -> id_baixaMedicamento;                
        }
        else {
            return print('Medicamento inválido.');
        }
        $preparo->save();
    }

    //-----------------------------------------------------------------------------------
    public function baixarAgendamento(Request $request){
        $novaBaixa = new agendamento_medicacao;
        $novaBaixa = agendamento_medicacao::create([
            'alarme' => $request -> alarme,
            'data_hora' => $request -> data_hora,
            'posologia' => $request -> posologia,
            'id_prontuario' => $request -> id_prontuario,
            'id_medicamento' => $request -> id_medicamento,
            'id_usuario' => $request -> id_usuario
        ]);
    }
    
    //----------------------------------------------------------------------------------
    public function emitirRelatorioPaciente(){
        $arrayPaciente = collect([]);
        $arrayProntuario = collect([]);

        foreach (Paciente::all() as $Paciente)
            $arrayPaciente->push($Paciente);

        foreach (Prontuario::all() as $Prontuario)
            $arrayProntuario->push($Prontuario);

        return [$arrayPaciente, $arrayProntuario];
    }
    /*
    //-----------------------------------------------------------------------------------
    public function emitirRelatorioAgendamentoBaixados(){ // COMO QUE FAZ ?!
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $Agendamento_medicacao)
            $array->push($Agendamento_medicacao);
        return($array);
    }

    //------------------------------------------------------------------------------------
    public function emitirMedicamentoPendentes(){
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $Agendamento_medicacao)
            $array->push($Agendamento_medicacao);
        return($array);
    }
    */ 
    //--------------------------------------------------------------------------------------
    public function cadastrarPaciente(Request $request){        
        $paciente = new Paciente;
        $paciente = Paciente::create([
            'nome' => $request -> nome,
            'email' => $request -> email,
            'nome_responsavel'=> $request -> nome_responsavel,                
            'telefone'=> $request -> telefone,
            'cpf'=> $request -> cpf,
            'telefone_responsavel'=> $request -> telefone_responsavel,
            'fatorRH'=> $request -> fatorRH,
            'endereco'=>$request ->endereco
        ]);
        return $paciente;
    }


}
