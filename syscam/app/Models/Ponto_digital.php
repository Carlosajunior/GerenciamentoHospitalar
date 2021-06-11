<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponto_digital extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data_hora_entrada',
        'data_hora_saida',        
        'id_usuario'
    ];
    protected $table = 'ponto_digital';
    public $timestamps = false;
}
