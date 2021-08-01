<?php

namespace App\Http\Controllers;

use App\Models\DatosResponsablesProyecto;
use App\Models\ObjetivoGeneralProyecto;
use App\Models\ResumenMatriculaIngresoPostGrado;
use App\Models\ResumenMatriculaIngresoPreGrado;
use Illuminate\Http\Request;

class Proyecto1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DResponsable=DatosResponsablesProyecto::All();
        $RMIngresoPregrado=ResumenMatriculaIngresoPreGrado::All();
        $RMIngresoPostgrado=ResumenMatriculaIngresoPostGrado::All();
        $ObjGeneralProy=ObjetivoGeneralProyecto::All();
        return view('Proyecto1.POA_Proyecto1')->with('DResponsable', $DResponsable)
        ->with('RMIngresoPregrado', $RMIngresoPregrado)
        ->with('RMIngresoPostgrado', $RMIngresoPostgrado)
        ->with('ObjGeneralProy', $ObjGeneralProy);
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
    }
}
