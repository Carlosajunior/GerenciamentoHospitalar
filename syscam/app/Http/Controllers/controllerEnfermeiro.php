<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Prontuario;
use App\Models\Medicamento;
use App\Models\agendamento_medicacao;
use Illuminate\Http\Request;


class controllerEnfermeiro extends Controller
{
    public function cadastrarPacienteEnf(Request $request){   //Cadastra um novo Paciente 
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
        $paciente -> save();
        return $paciente;
    } 
    //---------------------------------------------------------------------------------
    public function ListarPacientes(){ //Gera uma lista com os Pacientes castrados 
        $array = collect([]);
        foreach (Paciente::all() as $Paciente)
            $array->push($Paciente);
        return($array);
    }
    //---------------------------------------------------------------------------------
    public function verificarAgendamento (){  //Gera uma lista com os Agendamentos castrados 
        $array = collect([]);
        foreach (agendamento_medicacao::all() as $agendamento_medicacao)
            $array->push($agendamento_medicacao);
        return($array);
    }    
    //----------------------------------------------------------------------------------
    public function emitirRelatorioPaciente(){ // Retorna a lista de pacientes e a lista de prontuario
        $arrayPaciente = collect([]);
        $arrayProntuario = collect([]);

        foreach (Paciente::all() as $Paciente)
            $arrayPaciente->push($Paciente);

        foreach (Prontuario::all() as $Prontuario)
            $arrayProntuario->push($Prontuario);

        return [$arrayPaciente , $arrayProntuario];
    }

    //----------------------------------------------------------------------------------
    public function prepararMedicacao(Request $request){ // Faz alteração em uma medicação
        $preparo = new Medicamento;
        $preparo = Medicamento::firstWhere('id','=',$request->id);
        if($preparo != null){          
            if($request -> quantidade != null)
            $preparo -> quantidade = $request -> quantidade;

        /*Fiz mas acho que não precisa
            if($request -> lote != null)
                $preparo -> lote = $request -> lote; 
            if($request -> nome != null)
                $preparo -> nome = $request -> nome;
            if($request -> id_baixaMedicamento != null)
                $preparo -> id_baixaMedicamento = $request -> id_baixaMedicamento;                
        */

        }
        else {
            return print('Medicamento inválido.');
        }
        $preparo->save();
    }

    //-----------------------------------------------------------------------------------
    public function baixarAgendamento(Request $request){ //Gera um novo agendamento
        $novaBaixa = new agendamento_medicacao;
        $novaBaixa = agendamento_medicacao::create([
            'alarme' => $request -> alarme,
            'data_hora' => $request -> data_hora,
            'posologia' => $request -> posologia,
            'id_prontuario' => $request -> id_prontuario,
            'id_medicamento' => $request -> id_medicamento,
            'id_usuario' => $request -> id_usuario
        ]);
        $novaBaixa->save();
        return $novaBaixa;
    }
    
    //-----------------------------------------------------------------------------------
    public function historicoAgendamentos(Request $request){ // Retorna um array com agendamentos já feitos pelo enfermeiro
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $Agendamento_medicacao)
            if($Agendamento_medicacao -> id_usuario == $request -> id_usuario  && $Agendamento_medicacao -> feito == 1)
                    $array->push($Agendamento_medicacao);
        return($array);
    }

    //-----------------------------------------------------------------------------------------

    public function AgendamentosPendentes(){ //Retorna um array com agendamentos pendentes
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $Agendamento_medicacao)
            if($Agendamento_medicacao -> feito == 0)
                $array->push($Agendamento_medicacao);
        return($array);
    }

    //------------------------------------------------------------------------------------------
}
