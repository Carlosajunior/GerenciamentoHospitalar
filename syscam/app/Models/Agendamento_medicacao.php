<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendamento_medicacao extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'alarme',
        'data_hora',
        'posologia',
        'id_prontuario',
        'id_medicamento',
        'id_usuario',
    ];
}
