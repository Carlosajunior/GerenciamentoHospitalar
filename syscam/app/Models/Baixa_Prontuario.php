<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baixa_Prontuario extends Model
{
    use HasFactory;
    protected $table = 'baixa_prontuario';
    public $timestamps = false;

    protected $fillable =[
        'data_baixa',
        'tipo_baixa',
        'id_usuario'
    ];
}
