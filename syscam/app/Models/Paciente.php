<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'nome_responsavel',
        'telefone',
        'cpf',
        'telefone_responsavel',
        'endereco',
        'fatorRH',
        'internado'
    ];

    protected $hidden = [
        'cpf'
    ];
    protected $table = 'paciente';
    public $timestamps = false;
}
