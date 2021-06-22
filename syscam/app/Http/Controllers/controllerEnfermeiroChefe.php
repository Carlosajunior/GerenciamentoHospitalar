<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Usuario;
use App\Models\Prontuario;
use App\Models\Agendamento_medicacao;
use App\Models\Medicamento;
use App\Models\Ponto_digital;
use Illuminate\Http\Request;

class controllerEnfermeiroChefe extends Controller
{
    public function Criar_Prontuario(Request $request)
    {
        $prontuario = new Prontuario();
        $prontuario = Prontuario::create([
            'numero_quarto' => $request->numero_quarto,
            'data_internacao' => \Carbon\Carbon::now(),
            'nome_responsavel' => $request->nome_responsavel,
            'id_paciente' => $request->id_paciente,
            'idCID' => $request->idCID,
            'data_diagnostico' => \Carbon\Carbon::now()
        ]);
        return $prontuario;
    }

    public function Criar_Agendamento(Request $request)
    {
        $agendamento = new Agendamento_medicacao();
        $agendamento = Agendamento_medicacao::create([
            'alarme' => $request->alarme,
            'data_hora' => $request->data_hora,
            'posologia' => $request->posologia,
            'id_prontuario' => $request->id_prontuario,
            'id_medicamento' => $request->id_medicamento,
            'id_usuario' => $request->id_usuario
        ]);
        return $agendamento;
    }

    public function Criar_Posologia(Request $request)
    {
        $agendamento = Agendamento_medicacao::firstWhere('id', '=', $request->id);
        if ($agendamento != null) {
            if ($request->posologia != null)
                $agendamento->posologia = $request->posologia;
        }
    }

    public function Cadastrar_Paciente(Request $request)
    {
        $paciente = new Paciente;
        $paciente = Paciente::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'nome_responsavel' => $request->nome_responsavel,
            'telefone' => $request->telefone,
            'cpf' => $request->cpf,
            'telefone_responsavel' => $request->telefone_responsavel,
            'fatorRH' => $request->fatorRH,
            'endereco' => $request->endereco
        ]);
        return $paciente;
    }

    public function Cadastrar_Alarme()
    {
    }

    public function Alocar_Enfermeiro(Request $request)
    {
        $nomeEnfermeiro = $request->nome;
        $idAgendamento = $request->id;
        $usuario = Usuario::firstWhere('nome', '=', $nomeEnfermeiro);
        $agendamento = Agendamento_medicacao::firstWhere('id', '=', $idAgendamento);
        if ($usuario && $agendamento) {
            if ($usuario->id_Cargo == 2 || $usuario->id_Cargo == 4) {
                $agendamento->id_usuario = $usuario->id;
                $agendamento->save();
                return $agendamento;
            }
        }
        return response('dados inválidos', 404);
    }

    public function armazenar_Plantao(Request $request)
    {
        $usuario = Usuario::firstWhere('id', '=', $request->id);
        if ($usuario) {
            $ponto_digital = Ponto_digital::firstWhere('id_usuario', '=', $request->id)->firstWhere('data_hora_saida', '=', null);
            if (!$ponto_digital && $usuario) {
                $ponto_digital = new Ponto_digital;
                $ponto_digital = Ponto_digital::create([
                    'data_hora_entrada' => \Carbon\Carbon::now(),
                    'id_usuario' => $request->id
                ]);
                return $ponto_digital;
            } else if ($ponto_digital) {
                $ponto_digital->data_hora_saida = \Carbon\Carbon::now();
                $ponto_digital->save();
                return $ponto_digital;
            }
        }
        return response('dados inválidos', 404);
    }

    public function Emitir_Pacientes()
    {
        $array = collect([]);
        foreach (Paciente::all() as $paciente)
            $array->push($paciente);
        return ($array);
    }

    public function Emitir_Responsaveis_Agendamento()
    {
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $agendamento)
            $array->push($agendamento->id_usuario);
        return ($array);
    }

    public function agendamentosPendentes()
    {
        $array = collect([]);
        foreach (Agendamento_medicacao::where('feito',false)->get() as $agendamentoPendente)
            $array->push($agendamentoPendente);
        return ($array);
    }
    

    public function PrepararMedicamento()
    {
    }

    public function Emitir_Agendamentos()
    {
        $array = collect([]);
        foreach (Agendamento_medicacao::all() as $agendamento)
            $array->push($agendamento);
        return ($array);
    }

    public function Emitir_Medicamentos()
    {
        $array = collect([]);
        foreach (Medicamento::all() as $medicamento)
            $array->push($medicamento);
        return ($array);
    }
}
