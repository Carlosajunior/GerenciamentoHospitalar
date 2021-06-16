<?php

namespace App\Http\Controllers;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class controllerMedicamento extends Controller
{
    public function cadastrarMedicamento(Request $request){
        $medicamento = new Medicamento();
        $medicamento = Medicamento::create([
            'lote' => $request -> lote,
            'quantidade' => $request -> quantidade,
            'nome'=> $request -> nome
        ]);
        return $medicamento;
    }

    public function mostrarMedicamentos(){
        $array = collect([]);
        foreach (Medicamento::all() as $Medicamento)
            $array->push($Medicamento);
        return($array);
    }
}
