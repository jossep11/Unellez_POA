<?php

namespace App\Http\Controllers;

use App\Models\ResumenMatriculaIngresoPreGrado;
use Illuminate\Http\Request;

class ResumenM_I_P_EPreGrado_InstitutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $ResumenMatriculaPreGrado  = new ResumenMatriculaIngresoPreGrado();
        $ResumenMatriculaPreGrado->Nombre_Carrera=$request->get('Nombre_CarreraResumenPreGrado');
        $ResumenMatriculaPreGrado->N_Ingresos=$request->get('Cantidad_N_Ingreso_ResumenPreGrado');
        $ResumenMatriculaPreGrado->C_Prosecucion=$request->get('CantidadProsecucion_ResumenPreGrado');
        $ResumenMatriculaPreGrado->C_Egresados=$request->get('CantidadEgresados_ResumenPreGrado');
        $ResumenMatriculaPreGrado->save();
        return redirect('/proyecto');
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
        $ResumenMatriculaPreGrado = ResumenMatriculaIngresoPreGrado::find($id);
        $ResumenMatriculaPreGrado->Nombre_Carrera=$request->get('editNombre_CarreraResumenPreGrado');
        $ResumenMatriculaPreGrado->N_Ingresos=$request->get('editCantidad_N_Ingreso_ResumenPreGrado');
        $ResumenMatriculaPreGrado->C_Prosecucion=$request->get('editCantidadProsecucion_ResumenPreGrado');
        $ResumenMatriculaPreGrado->C_Egresados=$request->get('editCantidadEgresados_ResumenPreGrado');
        $ResumenMatriculaPreGrado->save();
        return redirect('/proyecto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ResumenMatriculaPreGrado = ResumenMatriculaIngresoPreGrado::find($id);
        $ResumenMatriculaPreGrado ->delete();
        return redirect('/proyecto');
    }
}
