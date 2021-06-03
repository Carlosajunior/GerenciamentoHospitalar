<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento_medicacao extends Model
{
    use HasFactory;
    protected $table = 'agendamento_medicacao';
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
