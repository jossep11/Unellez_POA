<?php

namespace App\Http\Controllers;

use App\Models\DatosResponsablesProyecto;
use Illuminate\Http\Request;

class Datos_Responsables_UserController extends Controller
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
        $Datos_Responsable= new DatosResponsablesProyecto();
        $Datos_Responsable->Responsables_Proyecto=$request->get('DatosResponsable');
        $Datos_Responsable->Nombres=$request->get('Nombres_DatosResponsable');
        $Datos_Responsable->Apellidos=$request->get('Apellidos_DatosResponsable');
        $Datos_Responsable->DocumentoIdentidad=$request->get('DocumentoID_Responsable');
        $Datos_Responsable->Cedula_Pasaporte=$request->get('Cedula_Pasaporte');
        $Datos_Responsable->Cargo=$request->get('Cargo_Responsable');
        $Datos_Responsable->Correo=$request->get('CorreoElectronico_Responsable');
        $Datos_Responsable->Telefono=$request->get('Numerotlf_Responsable');
        $Datos_Responsable->save();
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
        $Datos_Responsable = DatosResponsablesProyecto::find($id);
        $Datos_Responsable->Responsables_Proyecto=$request->get('DatosResponsable');
        $Datos_Responsable->Nombres=$request->get('Nombres_DatosResponsable');
        $Datos_Responsable->Apellidos=$request->get('Apellidos_DatosResponsable');
        $Datos_Responsable->DocumentoIdentidad=$request->get('editDocumentoID_Responsable');
        $Datos_Responsable->Cedula_Pasaporte=$request->get('Cedula_Pasaporte');
        $Datos_Responsable->Cargo=$request->get('Cargo_Responsable');
        $Datos_Responsable->Correo=$request->get('CorreoElectronico_Responsable');
        $Datos_Responsable->Telefono=$request->get('Numerotlf_Responsable');
        $Datos_Responsable->save();
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
        $Datos_Responsable = DatosResponsablesProyecto::find($id);
        $Datos_Responsable->delete();
        return redirect('/proyecto');
    }
}
