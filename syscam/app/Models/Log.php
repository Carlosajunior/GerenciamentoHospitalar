<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
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
        foreach (log::all() as $Log)
            $array->push($Log);
        return($array);
    }
}
