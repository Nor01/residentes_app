<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Comunicado;

class ComunicadoController extends Controller
{
    public function index(){
        return Comunicado::all();
    }

    public function createComunicado(Request $request){
        $fields = $request->validate([
            'descripcion' =>'required|string',
            'fecha'=>'required|date',
        ]);

        $comunicado = Comunicado::create([
            'descripcion'=>$fields['descripcion'],
            'fecha'=>$fields['fecha'],
        ]);

        return response($comunicado,201);
    }
}
