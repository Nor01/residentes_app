<?php

namespace App\Http\Controllers;

use App\Models\TipoVisita;
use Illuminate\Http\Request;

class TipoVisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return TipoVisita::all();
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
            'nombre'=>'required'
        ]);

        return TipoVisita::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoVisita  $tipoVisita
     * @return \Illuminate\Http\Response
     */
    public function show(TipoVisita $tipoVisita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoVisita  $tipoVisita
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoVisita $tipoVisita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoVisita  $tipoVisita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoVisita $tipoVisita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoVisita  $tipoVisita
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoVisita $tipoVisita)
    {
        //
    }
}
