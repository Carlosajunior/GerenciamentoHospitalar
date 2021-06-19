<?php

namespace App\Http\Controllers;
// use App\Models\Banco;
use Illuminate\Http\Request;

class controllerBanco extends Controller{

    //Criando Backup do Banco de dados:
    public function criaBackup (Request $request){
        //Criar um diretório de backup:
        $diretorio = 'backup/';
        
        if(!is_dir($diretorio)){
            mkdir ($diretorio,0777,true);
            chmod($diretorio,0777);
        }

        //Nome do arquivo de backup:
        $data = date ('Y-m-d-h-i-s');
        $nome_arquivo = $diretorio . "db_backup_" . $data . ".sql";

        
        $comando = 'mysqldump -u '.$request ->usuario . ' -p'. $request ->senha . ' ' . "syscambd" . ' >' . $nome_arquivo;

        shell_exec($comando);
        echo "Sucefull";
    }
}