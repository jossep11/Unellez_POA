@extends('PoaLayout')

@section('css')

@endsection

@section('contenido')

<div class="loader-center">
    <div class="loader loader-primary loader-lg"></div>
</div>

<div class="col-md-12">
    <div class="card">
    
        <div class="card-header">
            <div class="barra">
            <h1 id="" class="IdentificadorIndex">Formación de estudiantes en Pregrado y Postgrado o estudios avanzados</h1>    
            
                <a href="/reporte_xlsx" > <i class="fas fa-file-excel"></i> </i> Generar Excel  </a>
            
            
            </div>
        </div>
      
        <div class="accordion accordion-secondary displaynone">    
            @include('Proyecto1.Collapses.Datos_Responsables')
            @include('Proyecto1.Collapses.Resumen_Matricula_Ingreso_Prosecucion_Egreso_PreGrado_Atendido_Instituto')
            @include('Proyecto1.Collapses.Resumen_Matricula_Ingreso_Prosecucion_Egreso_PostGrado_Atendido_Instituto')

            {{-- Personal Academico 
            @include('RecursosHumanos.PersonalAcademicoCollapse')
            --}}

           {{-- Personal administrativo y obrero 
           @include('RecursosHumanos.PersonalAyOCollapse')
           --}}
        </div>


    </div>
    
</div>


@endsection