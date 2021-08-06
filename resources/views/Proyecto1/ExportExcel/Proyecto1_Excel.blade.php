<table>
    <thead>
    <tr>
        <th><img src="{{ public_path().'/logounellez.jpg' }}" /></th>
        <th  colspan="4" style="text-align: center">
    <strong>
        Plan Operativo Anual
    </strong>
        </th>
        <th>
            <strong>
                Descargado por: {{ $user = auth()->user()->name }}
            </strong>
        </th>
     
    </tr>
    </thead>
    
    <tbody>
        <tr>
           
            <td></td>
            <td></td>
            <td></td>
        </tr>

{{-- comment --}}

<tr>
<th colspan="2">
  <strong>  Objetivo General</strong>
</th>
</tr>

<tr>
    @php ( $cuenta=count($ObjetivoGeneral))
    @foreach ($ObjetivoGeneral as $key=> $objetivo)
    
    @if ($cuenta==$key+1)
     <td  colspan="20">{{$objetivo->ObjetivoProyecto1}} </td> 
     @endif 

    @endforeach
    @if($cuenta==0)
   <td>No hay objetivo establecido aun</td>
    
   @endif

</tr>
    {{-- comment --}}

    <tr>
        <th colspan="14"  style="text-align: center;  height: 40px; vertical-align: center;"><strong> Datos de Responsables </strong></th>
        <td></td>
    </tr>

    <tr>
        <th colspan="2"> <strong>Responsable</strong> </th>
        <th colspan="2"> <strong>Nombres</strong> </th>
        <th colspan="2"> <strong>Apellidos</strong> </th>
        <th colspan="2"> <strong>Cédula/Pasaporte</strong> </th>
        <th colspan="2"> <strong>Cargo</strong> </th>
        <th colspan="2"> <strong>Correo</strong> </th>
        <th colspan="2"> <strong>Teléfono</strong> </th>
    </tr>

    @foreach ($DatosResponsable as $DatoResponsable)
<tr>
    <td colspan="2">{{$DatoResponsable->Responsables_Proyecto}}</td>
    <td colspan="2">{{$DatoResponsable->Nombres}}</td>
    <td colspan="2">{{$DatoResponsable->Apellidos}}</td>
    <td colspan="2">{{$DatoResponsable->DocumentoIdentidad}}-{{$DatoResponsable->Cedula_Pasaporte}}</td>
    <td colspan="2">{{$DatoResponsable->Cargo}}</td>
    <td colspan="2">{{$DatoResponsable->Correo}}</td>
    <td colspan="2" style="text-align: center">{{$DatoResponsable->Telefono}}</td>
</tr>
    @endforeach
    {{-- comment --}}

    <tr>
        <th colspan="14"  style="text-align: center;  height: 40px; vertical-align: center;"><strong> Resumen de Matrícula en Ingreso, Prosecución y Egreso de PreGrado Atendido por la Institución</strong></th>
        <td></td>
    </tr>

    <tr>
        <th colspan="3" style="text-align: center"> <strong>Nombre de la Carrera</strong> </th>
        <th colspan="3" style="text-align: center"> <strong>Cantidad N. Ingresos</strong> </th>
        <th colspan="3" style="text-align: center"> <strong>Cantidad Prosecución</strong> </th>
        <th colspan="3" style="text-align: center"> <strong>Cantidad Egresados	</strong> </th>
        
    </tr>

    @foreach ($ResumenMatriculaPregrado as $RPregrado)
<tr>
    
    <td colspan="3" style="text-align: center">{{$RPregrado->Nombre_Carrera}}</td>
    <td colspan="3" style="text-align: center">{{$RPregrado->N_Ingresos}}</td>
    <td colspan="3" style="text-align: center">{{$RPregrado->C_Prosecucion}}</td>
    <td colspan="3" style="text-align: center">{{$RPregrado->C_Egresados}}</td>
    
</tr>
    @endforeach






    {{-- comment --}}

    <tr>
        <th colspan="14"  style="text-align: center;  height: 40px; vertical-align: center;"><strong> Resumen de Matrícula en Ingreso, Prosecución y Egreso de PreGrado Atendido por la Institución</strong></th>
        <td></td>
    </tr>

    <tr>
        <th colspan="3" style="text-align: center"> <strong>Nombre del Postgrado</strong> </th>
        <th colspan="3" style="text-align: center"> <strong>Tipo de Postgrado	</strong> </th>
        <th colspan="3" style="text-align: center"> <strong>Cantidad N. Ingresos</strong> </th>
        <th colspan="3" style="text-align: center"> <strong>Cantidad Prosecución</strong> </th>
        <th colspan="3" style="text-align: center"> <strong>Cantidad Egresados	</strong> </th>
        
        
    </tr>

@foreach ($ResumenMatriculaPostgrado as $Postgrado)
<tr>
   
    <td colspan="3" style="text-align: center">{{$Postgrado->Nombre_PostGrado}}</td>
    <td colspan="3" style="text-align: center">{{$Postgrado->TipoPostgrado}}</td>
    <td colspan="3" style="text-align: center">{{$Postgrado->N_IngresosP}}</td>
    <td colspan="3" style="text-align: center">{{$Postgrado->C_ProsecucionP}}</td>
    <td colspan="3" style="text-align: center">{{$Postgrado->C_EgresadosP}}</td>

   
</tr> 
@endforeach




    </tbody>
</table>