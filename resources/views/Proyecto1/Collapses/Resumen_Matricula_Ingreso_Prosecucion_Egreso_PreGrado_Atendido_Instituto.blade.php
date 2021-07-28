
    <p>Edit me</p>
    <div class="card">
        
        <div class="card-header collapsed card_amenaza_collapse" id="headinamenazaone" data-toggle="collapse" data-target="#collapseDatosR1" aria-expanded="false" aria-controls="collapseDatosR1">
            <div class="span-icon">
                <i class="fas fa-pen-square"></i>
            </div>
            <div class="span-title">
                Resumen de Matrícula en Ingreso, Prosecución y Egreso de PreGrado Atendido por la Institución
            </div>
            <div class="span-mode"></div>
        </div>


        <div id="collapseDatosR1" class="collapse" aria-labelledby="headinamenazaone" data-parent="#accordion">
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
                    
                            <form class="añadirAmenaza" method="POST">
                                @csrf
                              
                                <p>Code here</p>
                                <div class="form-group col-md-12">
                                    <label>Nombre de la Carrera</label>
                                    <input type="text" class="form-control"  name="" placeholder="Ej: Arquitectura"  maxlength="30" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="Apellidos">Cantidad de Nuevos Ingresos</label>
                                    <input type="text" class="form-control" name="" placeholder="Cantidad Númerica" maxlength="10" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Cantidad en Prosecución</label>
                                    <input type="text"  class="form-control" name="" required placeholder="Cantidad Númerica" maxlength="12" >

                                </div>
                
                                <div class="form-group col-md-12">
                                    <label>Cantidad de Egresados</label>
                                    <input type="text" class="form-control" name="" placeholder="Cantidad Númerica" maxlength="10" required>
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
                       {{-- 
                        @foreach($amenazas as $amenaza) --}}
                        <tr>
                            <td></td>

                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td>
                                <form class="eliminar_Amenaza"  method="POST">
                            	<div class="form-button-action">    
                                    <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editAmenaza"><i class="fa fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                <button class="btn btn-link btn-danger" title="Eliminar" type="submit" >
                                    <i class="fa fa-times"></i>
                                </button>
                                
                                </div>
                                </form>
                
                            </td>

            <!-- Modal data insertion  -->
            {{-- to pass it the item that's gonna be changed have to send $amenaza-> --}}
            <div class="modal fade" id="editAmenaza" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <form class="AmenazaCambios" method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                           
                      

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
                        {{--
                        
                        @endforeach
 comment --}}
                    </tbody>
                </table>
      
            </div>
    
             
            </div>
        </div>


    </div>

<script>


//añadido
    $('.añadirAmenaza').on('submit', function(e) {
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
                        window.location.replace("/matriz_analisis_admin"); 
                });
});

//edit
$('.AmenazaCambios').submit(function(e){
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
$('.eliminar_Amenaza').submit(function(e){
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

