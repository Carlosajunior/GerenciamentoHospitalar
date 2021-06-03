<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use App\Models\Prontuario;
use App\Models\Agendamento_medicacao;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class controllerEnfermeiroChefe extends Controller
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

    public function Criar_Posologia(Request $request){
        $agendamento = Agendamento_medicacao::firstWhere('id','=',$request->id);
        if($agendamento != null){
            if($request -> posologia != null)
                $agendamento->posologia = $request->posologia;
        }
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
        $array = collect([]);
        foreach (Paciente::all() as $paciente)
            $array->push($paciente);
        return($array);
    }

    public function Emitir_Responsaveis_Agendamento(){
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $agendamento)
            $array->push($agendamento->id_usuario);
        return($array);
    }

    public function Verificar_Agendamento(){

    }

    public function PrepararMedicamento(){

    }

    public function Emitir_Agendamentos(){
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $agendamento)
            $array->push($agendamento);
        return($array);
    }

    public function Emitir_Medicamentos(){
        $array = collect([]);
        foreach (Medicamento::all() as $medicamento)
            $array->push($medicamento);
        return($array);
    }
}
