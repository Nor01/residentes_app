<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incidente;

class IncidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return Incidente::all();
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
            'fecha'=>'required',
            'lugar'=>'required',
            'descripcion'=>'required'
        ]);

        return Incidente::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Incidente::destroy($id);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  str  $fecha
     * @return \Illuminate\Http\Response
     */
    public function searchFecha($fecha)
    {
        //
        return Incidente::where('fecha','like','%'.$fecha.'%')->get();
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  str  $lugar
     * @return \Illuminate\Http\Response
     */
    public function searchLugar($lugar)
    {
        //
        return Incidente::where('lugar','like','%'.$lugar.'%')->get();
    }
}
