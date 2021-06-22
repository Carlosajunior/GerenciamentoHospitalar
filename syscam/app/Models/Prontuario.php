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
        foreach (Prontuario::all() as $Prontuario)
            $array->push($Prontuario);
        return ($array);
    }
}
