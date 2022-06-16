<?php

namespace App\Http\Controllers;

use App\Models\VisitaEventual;
use Illuminate\Http\Request;

class VisitaEventualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VisitaEventual::query()
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
        $request->validate([
            'nombre'=>'required',
            'notas'=>'required',
            'tipo_visita_id'=>'required'
        ]);

        return VisitaEventual::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VisitaEventual  $visitaEventual
     * @return \Illuminate\Http\Response
     */
    public function show(VisitaEventual $visitaEventual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VisitaEventual  $visitaEventual
     * @return \Illuminate\Http\Response
     */
    public function edit(VisitaEventual $visitaEventual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VisitaEventual  $visitaEventual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VisitaEventual $visitaEventual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VisitaEventual  $visitaEventual
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisitaEventual $visitaEventual)
    {
        //
    }
}
