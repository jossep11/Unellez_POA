
    <div class="card ">
        


        <div class="card-header collapsed card_amenaza_collapse" id="headinamenazaone" data-toggle="collapse" data-target="#collapseDatosR1" aria-expanded="false" aria-controls="collapseDatosR1">
            <div class="span-icon">
                <i class="fas fa-pen-square"></i>
            </div>
            <div class="span-title">
                Datos de los Responsables del Proyecto
            </div>
            <div class="span-mode"></div>
        </div>


        <div id="collapseDatosR1" class="collapse show" aria-labelledby="headinamenazaone" data-parent="#accordion">
            <div class="card-body">
    
                {{-- Header inside of the collapse --}}

                <div class="Header_InsideCollapse">
            
            <form class="EnviandoObjetivoGeneral" action="{{route("ObjetivoGeneral.store")}}" method="POST">
                @csrf
            
                <div class="objetivoselementos">
                
                <div class="objetivoselementosh2">
                    <h2 class="objetivogeneral"> Objetivo General del Proyecto</h2>
                </div>
@role('user')

                <div class="iconosguardar">
                    <button type="button" id="editarObjetivoGeneral" class="btn guarda_objetivoGeneral"><i class="fas fa-pen-square "></i></button>
                    <button type="submit" id="GuardarObjetivoGeneral" class="btn guarda_objetivoGeneral" disabled><i class="fas fa-save"></i></button>
                </div>   
@endrole
                </div>

 @php ( $cuenta=count($ObjGeneralProy))
 @foreach ($ObjGeneralProy as $key=> $objetivo)
        @if ($cuenta==$key+1)
        
        <textarea class="textareaobjetivGeneral" name="ObjetivoGeneral" id="" disabled required minlength="5" maxlength="450" placeholder="Objetivo General del Proyecto">{{$objetivo->ObjetivoProyecto1}}</textarea>

        @endif        
 @endforeach                   
  
 
 @if($cuenta==0)
        <textarea class="textareaobjetivGeneral" name="ObjetivoGeneral" id="" placeholder="Objetivo General del Proyecto" disabled required minlength="5" maxlength="450"></textarea>
 @endif
            </form>

                    <div class="barra">
                    <h1 id="" class="IdentificadorIndex">Datos de Responsables</h1> 
                    <!-- Button trigger modal -->
                    @role('user')
                    <a href="# " class="btn_agregar_estrategia disabled" data-toggle="modal" data-target="#modalInsertDatosResponsable1"> <i class="fas fa-plus"></i> Añadir nuevo</a>
                    @endrole
                    </div>
                </div>
         
            <!-- Modal data insertion  -->

         



            <div class="modal fade" id="modalInsertDatosResponsable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Responsable</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                    
                            <form class="añadirDatos_Responsable" action="{{route("ResponsablePro.store")}}" method="POST">
                                @csrf
                              
                                <div class="form-row">
                
                                    <div class="form-group col-md-6">
                                        <label for="Pais">Responsable</label>
                                        <input type="text" class="form-control" name="DatosResponsable" placeholder="Ej:Responsable del Proyecto" maxlength="30" required>
                                    </div>
                                    

                                <div class="form-group col-md-6">
                                    <div class="radio_side " >

                                    <label class="radio-inline" >
                                        <input class="" type="radio" id="ButtonR1"  name="DocumentoID_Responsable" value="V" required> Cedula
                                    </label>
                                    
                                    <label class="radio-inline">
                                        <input type="radio" class=""  id="ButtonR2" name="DocumentoID_Responsable" value="P" required> Pasaporte
                                    </label>
                                    </div>

                                    <input type="text" class="form-control" name="Cedula_Pasaporte" placeholder="Número de Cedula/Pasaporte" required disabled >
                                
                                </div>

                                    <div class="form-group col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control"  name="Nombres_DatosResponsable" placeholder="Ej: Montero Lamar"  maxlength="25" minlength="5" pattern="[A-Za-z\s]*" title="Campo Textual" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="Apellidos_DatosResponsable" placeholder="Ej: Briceño Paredes" minlength="5" maxlength="25" required pattern="[A-Za-z\s]*" title="Campo Textual">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Cargo</label>
                                        <input type="text"  class="form-control" name="Cargo_Responsable" required placeholder="Ej: Coordinador de Sistemas" pattern="[A-Za-z\s]*" title="Campo Textual">

                                       
                                    </div>

                    
                                    <div class="form-group col-md-6">
                                        <label>Número Teléfonico</label>
                                        <input type="text" class="form-control" name="Numerotlf_Responsable" placeholder="Ej: 04145224549" maxlength="11" minlength="11" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="ConLaboral">Correo Electrónico</label>
                                        
                                        <input type="email" class="form-control" name="CorreoElectronico_Responsable" placeholder="Ej: yahoo@gmail.com" required >
                                    </div>



                                </div>

                                

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info">Añadir</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>

                            </form>
                        
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="table-responsive">
             
                <table id="basic-datatables1" class="display table table-striped table-hover dataTable nowrap" style="width: 100%">
                    <thead class="center11">
                        {{-- insertion of items --}}
                        <tr>
                            
                            <th>Responsable</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cédula/Pasaporte</th>
                            <th>Cargo</th>
                            <th class="td_correo">Correo</th>
                            <th>Teléfono</th>
                            @role('user')
                            <th class="thresponsive">Acciones</th>
                            @endrole
                        </tr>
                    </thead>
    
                    {{--database data subtraction --}}
                    <tbody>
                    {{-- Data extraction from database --}}
                 
                        @foreach($DResponsable as $Responsable)
                        <tr>
                            <td>{{$Responsable->Responsables_Proyecto}}</td>

                            <td>{{$Responsable->Nombres}}</td>
                            <td>{{$Responsable->Apellidos}}</td>
                            <td>{{$Responsable->DocumentoIdentidad}}-{{$Responsable->Cedula_Pasaporte}}</td>
                            <td>{{$Responsable->Cargo}}</td>
                            <td>{{$Responsable->Correo}}</td>
                            <td>{{$Responsable->Telefono}}</td>
                            @role('user')
                            <td>
                                <form class="eliminar_DatosResponsable" action="{{route("ResponsablePro.destroy", $Responsable->id)}}"  method="POST">
                            	<div class="form-button-action">
                                    
                                    <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editDatos_Responsable{{$Responsable->id}}"><i class="fa fa-edit"></i></a>
                                
                                    @csrf
                                    @method('DELETE')
                               
                                <button class="btn btn-link btn-danger" title="Eliminar" type="submit" >
                                    <i class="fa fa-times"></i>
                                </button>
                            
                                
                                </div>
                                </form>
                
                            </td>    @endrole

            <!-- Modal data Edit  -->
            {{-- to pass it the item that's gonna be changed have to send $amenaza-> --}}
            <div class="modal fade" id="editDatos_Responsable{{$Responsable->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modificar Datos del Responsable</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- with amenaza.update I indicate where it's gonna be the change Jp--}}
                        {{-- $amenaza is the reference the item that it's gonna be changed Jp--}}            
                        <form class="Datos_ResponsableCambios" action="{{route("ResponsablePro.update", $Responsable->id)}}" method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                            <div class="form-row">
                
                                <div class="form-group col-md-6">
                                    <label for="Pais">Responsable</label>
                                    <input type="text" class="form-control" name="DatosResponsable" placeholder="Ej:Responsable del Proyecto" maxlength="30" required value="{{$Responsable->Responsables_Proyecto}}">
                                </div>
                                

                            <div class="form-group col-md-6">
                                <div class="radio_side " >

                                <label class="radio-inline" for="">
                                    <input type="radio" class="ButtonR1" name="editDocumentoID_Responsable" value="V" required  {{ ($Responsable->DocumentoIdentidad=="V")? "checked" : "" }} > Cedula
                                </label>
                                
                                <label class="radio-inline" for="">
                                    <input type="radio" class="ButtonR2"  name="editDocumentoID_Responsable" value="P" required  {{ ($Responsable->DocumentoIdentidad=="P")? "checked" : "" }}> Pasaporte
                                </label>
                                </div>

                                <input type="text" class="form-control Cedula_Pasaporte" name="Cedula_Pasaporte" placeholder="Número de Pasaporte/Cedula" required  value="{{$Responsable->Cedula_Pasaporte}}" pattern="\d*" title="Campo Numérico">
                            
                            </div>

                                <div class="form-group col-md-6">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control"  name="Nombres_DatosResponsable" placeholder="Ej: Montero Lamar"  maxlength="25" required value="{{$Responsable->Nombres}}" pattern="[A-Za-z\s]*" title="Campo Textual" minlength="5">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="Apellidos">Apellidos</label>
                                    <input type="text" class="form-control" name="Apellidos_DatosResponsable" placeholder="Ej: Briceño Perez" maxlength="25" required value="{{$Responsable->Apellidos}}" pattern="[A-Za-z\s]*" title="Campo Textual" minlength="5">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Cargo</label>
                                    <input type="text"  class="form-control" name="Cargo_Responsable" required placeholder="Ej: Coordinador de Sistemas"  value="{{$Responsable->Cargo}}" pattern="[A-Za-z\s]*" title="Campo Textual" minlength="5"  maxlength="30">

                                </div>

                
                                <div class="form-group col-md-6">
                                    <label>Número Teléfonico</label>
                                    <input type="text" class="form-control" name="Numerotlf_Responsable" placeholder="Ej: 04145224549" maxlength="11" minlength="11" required value="{{$Responsable->Telefono}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="ConLaboral">Correo Electrónico</label>
                                    
                                    <input type="email" class="form-control" name="CorreoElectronico_Responsable" placeholder="Ej: yahoo@gmail.com" required value="{{$Responsable->Correo}}" >
                                </div>



                            </div>
                      

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            </div>

                        </form>
                    </div>
                </div>
                </div>
            </div>
                        </tr>
                    
                        
                        @endforeach

                    </tbody>
                </table>
      
            </div>
    
             
            </div>
        </div>


    </div>

<script>


//añadido
$('.EnviandoObjetivoGeneral').on('submit', function(e) {
    e.preventDefault();
                swal({
                    title: "Excelente!",
                    text: "La información se ha actualizado de forma correcta!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Ok",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                           
                        }
                    }
                }).then((redir)=>
                {
                       this.submit();
                });

});

    $('.añadirDatos_Responsable').on('submit', function(e) {
        e.preventDefault();
                swal({
                    title: "Excelente!",
                    text: "La información se ha actualizado de forma correcta!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Ok",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                           
                        }
                    }
                }).then((redir)=>
                {
                       this.submit();
                });
});

//edit
$('.Datos_ResponsableCambios').submit(function(e){
        e.preventDefault();
                swal("La información se ha actualizado de forma correcta!", {
                    icon: "success",
                    buttons : {
                        confirm : {
                            visible: true,
                            className: 'btn btn-success'
                        }
                    }
                });
            this.submit();
        });


//eliminar 
$('.eliminar_DatosResponsable').submit(function(e){
        e.preventDefault();
        swal({
            title: '¿Está seguro que desea borrar este registro?',
            text: "¡No pódras revertir esta acción!",
            type: 'warning',
            buttons:{
                confirm: {
                    text : 'Sí, Borrar',
                    className : 'btn btn-info'
                },
                cancel: {
                    visible: true,
                    text : 'No, cancelar!',
                    className: 'btn btn-danger'
                }
            }
            
        }).then((willDelete) => {
            if (willDelete) {
                swal("Registro borrado", {
                    icon: "success",
                    buttons : {
                        confirm : {
                            visible: false,
                            className: 'btn btn-success'
                        }
                    }
                });
            this.submit();
            } else {
                //nothing happes
            }
        });

    });

</script>

