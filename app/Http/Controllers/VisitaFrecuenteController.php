<?php

namespace App\Http\Controllers;

use App\Models\VisitaFrecuente;
use Illuminate\Http\Request;

class VisitaFrecuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return VisitaFrecuente::query()
            ->with(['tipovisita' => function ($query) {
                $query->select('id','nombre');
            }])
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre'=>'required',
            'notas'=>'required',
            'tipo_visita_id'=>'required'
        ]);

        return VisitaFrecuente::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitaFrecuente  $visitaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function show(VisitaFrecuente $visitaFrecuente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisitaFrecuente  $visitaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitaFrecuente $visitaFrecuente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisitaFrecuente  $visitaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitaFrecuente $visitaFrecuente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitaFrecuente  $visitaFrecuente
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitaFrecuente $visitaFrecuente)
    {
        //
    }
}
