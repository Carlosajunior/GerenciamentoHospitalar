<?php

namespace App\Http\Controllers;

class controllerBanco extends Controller
{
    public function Backup (){
        //Criar um diretório de backup:
        $diretorio = 'backup/';        
        if(!is_dir($diretorio)){
            mkdir ($diretorio,0777,true);
            chmod($diretorio,0777);
        }
        //Nome do arquivo de backup:
        $data = date ('Y-m-d-h-i-s');
        $nome_arquivo = $diretorio . "db_backup_" . $data . ".sql";        
        $comando = 'mysqldump -u '.'root' . ' -p'. '2247' . ' ' . "syscambd" . ' >' . $nome_arquivo;
        shell_exec($comando);
    }
}
