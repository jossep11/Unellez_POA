<?php

namespace App\Http\Controllers;

use App\Models\ResumenMatriculaIngresoPostGrado;
use Illuminate\Http\Request;

class ResumenM_I_P_EPostGrado_InstitutoController extends Controller
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
        $ResumenMatriculaPostGrado  =new ResumenMatriculaIngresoPostGrado();
        $ResumenMatriculaPostGrado->Nombre_PostGrado=$request->get('Nombre_CarreraPostgrado');
        $ResumenMatriculaPostGrado->TipoPostgrado=$request->get('Tipo_Postgrado');
        $ResumenMatriculaPostGrado->N_IngresosP=$request->get('Cantidad_NuevoIngresoPostgrado');
        $ResumenMatriculaPostGrado->C_ProsecucionP=$request->get('Cantidad_ProsecucionPostgrado');
        $ResumenMatriculaPostGrado->C_EgresadosP=$request->get('Cantidad_EgresadosPostgrado');
        $ResumenMatriculaPostGrado->save();
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
        $ResumenMatriculaPostGrado = ResumenMatriculaIngresoPostGrado::find($id);
        $ResumenMatriculaPostGrado->Nombre_PostGrado=$request->get('editNombre_CarreraPostgrado');
        $ResumenMatriculaPostGrado->TipoPostgrado=$request->get('editTipo_Postgrado');
        $ResumenMatriculaPostGrado->N_IngresosP=$request->get('editCantidad_NuevoIngresoPostgrado');
        $ResumenMatriculaPostGrado->C_ProsecucionP=$request->get('editCantidad_ProsecucionPostgrado');
        $ResumenMatriculaPostGrado->C_EgresadosP=$request->get('editCantidad_EgresadosPostgrado');
        $ResumenMatriculaPostGrado->save();
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
        $ResumenMatriculaPostGrado = ResumenMatriculaIngresoPostGrado::find($id);
        $ResumenMatriculaPostGrado->delete();
        return redirect('/proyecto');
    }
}
