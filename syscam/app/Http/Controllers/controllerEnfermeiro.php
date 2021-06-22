<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Prontuario;
use App\Models\Medicamento;
use App\Models\agendamento_medicacao;
use Illuminate\Http\Request;


class controllerEnfermeiro extends Controller
{
    //Cadastra um novo Paciente 
    public function cadastrarPacienteEnf(Request $request){   
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
    //Gera uma lista com os Pacientes castrados 
    public function ListarPacientes(){ 
        $array = collect([]);
        foreach (Paciente::all() as $Paciente)
            $array->push($Paciente);
        return($array);
    }

    //----------------------------------------------------------------------------------
    // Retorna a lista de pacientes e a lista de prontuario
    public function emitirRelatorioPaciente(){ 
        $arrayPaciente = collect([]);
        $arrayProntuario = collect([]);

        foreach (Paciente::all() as $Paciente)
            $arrayPaciente->push($Paciente);

        foreach (Prontuario::all() as $Prontuario)
            $arrayProntuario->push($Prontuario);

        return [$arrayPaciente , $arrayProntuario];
    }

    //----------------------------------------------------------------------------------
    // Faz alteração em uma medicação, alterando sua quantidade atual para a nova passada pelo request.
    public function prepararMedicacao(Request $request){ 
        $preparo = new Medicamento;
        $preparo = Medicamento::firstWhere('id','=',$request->id);
        if($preparo != null){          
            if($request -> quantidade != null)
            $preparo -> quantidade = $request -> quantidade;
        }
        else {
            return print('Medicamento inválido.');
        }
        $preparo->save();
    }

    //-----------------------------------------------------------------------------------
    //Muda o estado do agendamento para "feito":
    public function baixarAgendamento(Request $request){ 
        $novaBaixa = new agendamento_medicacao;
        $novaBaixa = agendamento_medicacao::firstWhere('id','=',$request->id);
        if($novaBaixa != null){          
            if($request -> feito != null)
                $novaBaixa -> feito = $request -> feito;
        }
    }
        //---------------------------------------------------------------------------------
    //Retorna um array com todos os Agendamentos tendo como entrada o id_usuario do enfermeiro logado:
    public function verificarAgendamento (Request $request){  
        $array = collect([]);
        foreach (agendamento_medicacao::all() as $agendamento_medicacao){
            if($request ->id_usuario == $agendamento_medicacao->id_usuario)
                $array->push($agendamento_medicacao);
        }
        return($array);
    }    
    //-----------------------------------------------------------------------------------
    // Retorna um array com agendamentos já feitos pelo enfermeiro logado através do id_usuario:
    public function historicoAgendamentos(Request $request){ 
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $Agendamento_medicacao)
            if($Agendamento_medicacao -> id_usuario == $request -> id_usuario  && $Agendamento_medicacao -> feito == 1)
                    $array->push($Agendamento_medicacao);
        return($array);
    }

    //-----------------------------------------------------------------------------------------
    //Retorna um array com agendamentos pendentes para o enfermeiro logado através do id_usuario:
    public function AgendamentosPendentes(Request $request){ 
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $Agendamento_medicacao)
            if($Agendamento_medicacao -> id_usuario == $request -> id_usuario  && $Agendamento_medicacao -> feito == 0)
                $array->push($Agendamento_medicacao);
        return($array);
    }
    //------------------------------------------------------------------------------------------
}
