<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs_Alteracao extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'data_alteracao',
        'nome',
        'telefone',
        'cpf',
        'email',
        'senha',
        'apelido',
        'id_Cargo'

    ];

    public function mostrarLogs(){
        $array = collect([]);
        foreach (Logs_Alteracao::all() as $Log)
            $array->push($Log);
        return($array);
    }
    protected $table = 'logs_alteracao';
}
