<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editarController extends Controller
{
    
    public function update(Request $request,$id)
    {
        $usuario = Usuario::find($id);
        $usuario = $request;
        $usuario->save();
    }


    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('user.update', ['user' => $user]);
    }


}
