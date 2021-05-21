<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Prontuario;
use App\Models\Agendamento_medicacao;
use Illuminate\Http\Request;

class EnfermeiroChefe extends Controller
{
    public function Criar_Protuario(Request $request){
        $prontuario = new Prontuario();
        $prontuario = Prontuario::create([
            'numero_quarto' => $request -> numero_quarto,
            'data_internacao' => $request -> data_internacao,
            'nome_responsavel'=> $request -> nome_responsavel,                
            'id_baixa_prontuario'=> $request -> id_baixa_prontuario,
            'id_paciente'=> $request -> id_paciente,
            'idCID'=> $request -> idCID,
            'data_diagnostico'=> $request -> data_diagnostico
        ]);
        return $prontuario;
    }

    public function Criar_Agendamento(Request $request){
        $agendamento = new Agendamento_medicacao();
        $agendamento = Agendamento_medicacao::create([
            'alarme' => $request ->alarme,
            'data_hora' => $request -> data_hora,
            'posologia'=> $request -> posologia,                
            'id_prontuario'=> $request -> id_prontuario,
            'id_medicamento'=> $request -> id_medicamento,
            'id_usuario'=> $request -> id_usuario
        ]);
        return $agendamento;
    }

    public function Criar_Posologia(){

    }

    public function Cadastrar_Paciente(Request $request){
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

    public function Cadastrar_Alarme(){

    }

    public function Alocar_Enfermeiro(){

    }

    public function Emitir_Plantão(){

    }

    public function Emitir_Pacientes(){

    }

    public function Emitir_Responsaveis_Agendamento(){

    }

    public function Verificar_Agendamento(){

    }

    public function PrepararMedicamento(){

    }

    public function Emitir_Agendamentos(){

    }

    public function Emitir_Medicamentos(){

    }
}
