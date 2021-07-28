
    <div class="card">
        
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
                    <div class="barra">
                    <h1 id="" class="IdentificadorIndex">Datos del Nuevo Responsable</h1> 
                    <!-- Button trigger modal -->
                    <a href="# " class="btn_agregar_estrategia" data-toggle="modal" data-target="#modalInsertDatosResponsable1"> <i class="fas fa-plus"></i> Añadir nuevo</a>
                    
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
                                        <input class="ButtonR1" type="radio" id="ButtonR1"  name="DocumentoID_Responsable" value="V" required> Cedula
                                    </label>
                                    
                                    <label class="radio-inline">
                                        <input type="radio" class="ButtonR2"  id="ButtonR2" name="DocumentoID_Responsable" value="P" required> Pasaporte
                                    </label>
                                    </div>

                                    <input type="text" class="form-control" name="Cedula_Pasaporte" placeholder="Ej:27164359" required disabled >
                                
                                </div>

                                    <div class="form-group col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control"  name="Nombres_DatosResponsable" placeholder="Ej: Montero Lamar"  maxlength="25" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="Apellidos_DatosResponsable" placeholder="Ej: Briceño Paredes" maxlength="25" required>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="inputPassword4">Cargo</label>
                                        <input type="text"  class="form-control" name="Cargo_Responsable" required placeholder="Ej: Coordinador de Sistemas" >

                                       
                                    </div>

                    
                                    <div class="form-group col-md-6">
                                        <label>Número Teléfonico</label>
                                        <input type="text" class="form-control" name="Numerotlf_Responsable" placeholder="Ej: 04145224549" maxlength="12" minlength="10" required>
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
             
                <table id="basic-datatables" class="display table table-striped table-hover dataTable nowrap" style="width: 100%">
                    <thead>
                        {{-- insertion of items --}}
                        <tr>
                            
                            <th>Responsable</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cédula/Pasaporte</th>
                            <th>Cargo</th>
                            <th class="td_correo">Correo</th>
                            <th>Teléfono</th>
                            <th class="thresponsive">Acciones</th>
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
                
                            </td>

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

                                <label class="radio-inline" >
                                    <input type="radio" class="ButtonR1" name="DocumentoID_Responsable" value="V" required  {{ ($Responsable->DocumentoIdentidad=="V")? "checked" : "" }} > Cedula
                                </label>
                                
                                <label class="radio-inline">
                                    <input type="radio" class="ButtonR2"  name="DocumentoID_Responsable" value="P" required  {{ ($Responsable->DocumentoIdentidad=="P")? "checked" : "" }}> Pasaporte
                                </label>
                                </div>

                                <input type="text" class="form-control" name="Cedula_Pasaporte" placeholder="Ej:27164359" required  value="{{$Responsable->Cedula_Pasaporte}}">
                            
                            </div>

                                <div class="form-group col-md-6">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control"  name="Nombres_DatosResponsable" placeholder="Ej: Montero Lamar"  maxlength="25" required value="{{$Responsable->Nombres}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="Apellidos">Apellidos</label>
                                    <input type="text" class="form-control" name="Apellidos_DatosResponsable" placeholder="Ej: Briceño Perez" maxlength="25" required value="{{$Responsable->Apellidos}}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Cargo</label>
                                    <input type="text"  class="form-control" name="Cargo_Responsable" required placeholder="Ej: Coordinador de Sistemas"  value="{{$Responsable->Cargo}}">

                                   
                                </div>

                
                                <div class="form-group col-md-6">
                                    <label>Número Teléfonico</label>
                                    <input type="text" class="form-control" name="Numerotlf_Responsable" placeholder="Ej: 04145224549" maxlength="12" minlength="10" required value="{{$Responsable->Telefono}}">
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
        swal({
            title: '¿Está seguro que desea realizar estos cambios?',
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
            } else {
                //nothing happes
            }
        });

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

