    <div class="card ">
        
        <div class="card-header collapsed card_amenaza_collapse" id="headinResumenMIPregrado" data-toggle="collapse" data-target="#collapseheadinResumenMIPregrado" aria-expanded="false" aria-controls="collapseheadinResumenMIPregrado">
            <div class="span-icon">
                <i class="fas fa-pen-square"></i>
            </div>
            <div class="span-title">
                Resumen de Matrícula en Ingreso, Prosecución y Egreso de PreGrado Atendido por la Institución
            </div>
            <div class="span-mode"></div>
        </div>


        <div id="collapseheadinResumenMIPregrado" class="collapse show" aria-labelledby="headinResumenMIPregrado" data-parent="#accordion">
            <div class="card-body">
    
                {{-- Header inside of the collapse --}}
                <div class="Header_InsideCollapse">
                    <div class="barra">
                    <h1 id="" class="IdentificadorIndex">Tabla de Datos</h1> 
                    <!-- Button trigger modal -->
                    <a href="# " class="btn_agregar_estrategia disabled" data-toggle="modal" data-target="#modalInsertResumenMIPregrado"> <i class="fas fa-plus"></i> Añadir nuevo</a>
                    
                    </div>
                </div>
         
            <!-- Modal data insertion  -->
            <div class="modal fade" id="modalInsertResumenMIPregrado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Añadir Nuevo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                    
                            <form class="añadirResumenPreGrado1" action="{{route("ResumenMatriculaPreGrado.store")}}" method="POST">
                                @csrf
                              

                                <div class="form-group col-md-12">
                                    <label>Nombre de la Carrera</label>
                                    <input type="text" class="form-control"  name="Nombre_CarreraResumenPreGrado" placeholder="Ej: Arquitectura"  maxlength="30" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="Apellidos">Cantidad de Nuevos Ingresos</label>
                                    <input type="text" class="form-control" name="Cantidad_N_Ingreso_ResumenPreGrado" placeholder="Cantidad Númerica" maxlength="10" required pattern="\d*" title="Campo Numerico">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Cantidad en Prosecución</label>
                                    <input type="text"  class="form-control" name="CantidadProsecucion_ResumenPreGrado" required placeholder="Cantidad Númerica" maxlength="12" required pattern="\d*" title="Campo Numerico" >

                                </div>
                
                                <div class="form-group col-md-12">
                                    <label>Cantidad de Egresados</label>
                                    <input type="text" class="form-control" name="CantidadEgresados_ResumenPreGrado" placeholder="Cantidad Númerica" maxlength="10" required  pattern="\d*" title="Campo Numerico">
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
             
                <table id="basic-datatables2" class="display table table-striped table-hover dataTable nowrap" style="width: 100%">
                    <thead>
                        {{-- insertion of items --}}
                        <tr>
                            
                            <th>Nombre de la Carrera</th>
                            <th>Cantidad N. Ingresos</th>
                            <th>Cantidad Prosecución</</th>
                            <th>Cantidad Egresados</</th>
                            <th class="thresponsive">Acciones</th>
                        </tr>
                    </thead>
    
                    {{--database data subtraction --}}
                    <tbody>
                    {{-- Data extraction from database --}}
                     
                        @foreach($RMIngresoPregrado as $itemPreGrado1) 
                        <tr>
                            <td>{{$itemPreGrado1->Nombre_Carrera}}</td>
                            <td>{{$itemPreGrado1->N_Ingresos}}</td>
                            <td>{{$itemPreGrado1->C_Prosecucion}}</td>
                            <td>{{$itemPreGrado1->C_Egresados}}</td>
                     

                            <td>
                                <form class="eliminar_ResumenPregrado1" action="{{route("ResumenMatriculaPreGrado.destroy",  $itemPreGrado1->id)}}" method="POST">
                            	<div class="form-button-action">    
                                    <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#edit_ResumenPregrado1_{{$itemPreGrado1->id}}"><i class="fa fa-edit"></i></a>
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
            <div class="modal fade" id="edit_ResumenPregrado1_{{$itemPreGrado1->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <form class="ResumenPreGradoCambios1" action="{{route("ResumenMatriculaPreGrado.update", $itemPreGrado1->id)}}" method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                            <div class="form-group col-md-12">
                                <label>Nombre de la Carrera</label>
                                <input type="text" class="form-control"  name="editNombre_CarreraResumenPreGrado" placeholder="Ej: Arquitectura"  maxlength="30" required value="{{$itemPreGrado1->Nombre_Carrera}}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="Apellidos">Cantidad de Nuevos Ingresos</label>
                                <input type="text" class="form-control" name="editCantidad_N_Ingreso_ResumenPreGrado" placeholder="Cantidad Númerica" maxlength="10" required pattern="\d*" title="Campo Numerico" value="{{$itemPreGrado1->N_Ingresos}}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Cantidad en Prosecución</label>
                                <input type="text"  class="form-control" name="editCantidadProsecucion_ResumenPreGrado" required placeholder="Cantidad Númerica" maxlength="12" required pattern="\d*" title="Campo Numerico"  value="{{$itemPreGrado1->C_Prosecucion}}">

                            </div>
            
                            <div class="form-group col-md-12">
                                <label>Cantidad de Egresados</label>
                                <input type="text" class="form-control" name="editCantidadEgresados_ResumenPreGrado" placeholder="Cantidad Númerica" maxlength="10" required  pattern="\d*" title="Campo Numerico" value="{{$itemPreGrado1->C_Egresados}}">
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
    $('.añadirResumenPreGrado1').on('submit', function(e) {
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
$('.ResumenPreGradoCambios1').submit(function(e){
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
$('.eliminar_ResumenPregrado1').submit(function(e){
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

