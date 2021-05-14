<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'telefone',
        'cargo',
        'cpf',
        'apelido',
        'id_Cargo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha',
        'idUsuario',
        'remember_token',
    ];
    
    protected $table = 'usuario';
    public $timestamps = false;

    public function mostrarUsuarios(){
       foreach (Usuario::all() as $Usuario)
        echo $Usuario->nome; 
    }
}
