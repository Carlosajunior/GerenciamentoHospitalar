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
    
    protected $hidden = [
        'id'
    ];
    protected $table = 'prontuario';
    public $timestamps = false;
}
