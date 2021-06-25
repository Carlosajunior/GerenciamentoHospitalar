<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_quarto',
        'data_internacao',
        'id_baixa_prontuario',
        'id_paciente',
        'idCID',
        'data_diagnostico'
    ];
    protected $table = 'prontuario';
    public $timestamps = false;

    public function mostrarProntuarios()
    {
        $array = collect([]);
        foreach (Prontuario::all() as $prontuario) {
            if ($prontuario) {
                $paciente = Paciente::firstWhere('id', '=', $prontuario->id_paciente);
                if ($paciente) {
                    if ($prontuario->id_baixa_prontuario == null) {
                        $Prontuario = (object)[
                            'nome' => $paciente->nome,
                            'numeroQuarto' => $prontuario->numero_quarto,
                            'id' => $prontuario->id,
                            'CID' => $prontuario->idCID
                        ];
                        json_encode($Prontuario);
                        $array->push($Prontuario);
                    }
                }
            }
        }
        return ($array);
    }
}
