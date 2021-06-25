<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    use HasFactory;
    protected $table = 'acao';
    protected $fillable =[
        'data_hora_acao',
        'acao',
        'id_usuario'
    ];
    public $timestamps = false;
}
