
    <div class="card ">
        
        <div class="card-header collapsed card_amenaza_collapse" id="Resumen_2" data-toggle="collapse" data-target="#collapseResumen2" aria-expanded="false" aria-controls="collapseResumen2">
            <div class="span-icon">
                <i class="fas fa-pen-square"></i>
            </div>
            <div class="span-title">
                Resumen de Matrícula en Ingreso, Prosecución y Egreso de PostGrado Atendido por la Institución
            </div>
            <div class="span-mode"></div>
        </div>


        <div id="collapseResumen2" class="collapse show" aria-labelledby="Resumen_2" data-parent="#accordion">
            <div class="card-body">
    
                {{-- Header inside of the collapse --}}
                <div class="Header_InsideCollapse">
                    <div class="barra">
                    <h1 id="" class="IdentificadorIndex">Tabla de Datos</h1> 
                    <!-- Button trigger modal -->
                    <a href="# " class="btn_agregar_estrategia disabled"  data-toggle="modal" data-target="#modalInsertResumenPostGrado"> <i class="fas fa-plus"></i> Añadir nuevo</a>
                    
                    </div>
                </div>
         
            <!-- Modal data insertion  -->
            <div class="modal fade" id="modalInsertResumenPostGrado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Añadir Nuevo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                    
                            <form class="añadirRessumenPostGrado1" action="{{route("ResumenMatriculaPostGrado.store")}}" method="POST">
                                @csrf
                              
                                <div class="form-group col-md-12">
                                    <label>Nombre del Postgrado</label>
                                    <input type="text" class="form-control"  name="Nombre_CarreraPostgrado" placeholder="Ej: Informática Avanzada"  maxlength="30" required pattern="[A-Za-z\s]*">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="Apellidos">Tipo de Postgrado</label>
                                    <input type="text" class="form-control" name="Tipo_Postgrado" placeholder="Ej: Maestría" maxlength="10" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Cantidad N. Ingresos</label>
                                    <input type="text"  class="form-control" name="Cantidad_NuevoIngresoPostgrado" required placeholder="Cantidad Númerica" maxlength="10"  pattern="\d*" title="Campo Numerico" >

                                </div>

                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Cantidad Prosecución</label>
                                    <input type="text"  class="form-control" name="Cantidad_ProsecucionPostgrado" required placeholder="Cantidad Númerica" maxlength="10" pattern="\d*" title="Campo Numerico" >

                                </div>
                
                                <div class="form-group col-md-12">
                                    <label>Cantidad de Egresados</label>
                                    <input type="text" class="form-control" name="Cantidad_EgresadosPostgrado" placeholder="Cantidad Númerica" maxlength="10" required pattern="\d*" title="Campo Numerico">
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
                <table id="basic-datatables3" class="display table table-striped table-hover dataTable nowrap" style="width: 100%">
                    <thead>
                      
                        <tr>
                            
                            <th>Nombre de la Carrera</th>
                            <th>Cantidad N. Ingresos</th>
                            <th>Cantidad Prosecución</th>
                            <th>Cantidad Egresados</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
    
                    {{--database data subtraction --}}
                    <tbody>
                    {{-- Data extraction from database --}}

                        @foreach($RMIngresoPostgrado as $item1P)
                        <tr>
                            <td>{{$item1P->Nombre_PostGrado}}</td>
                            <td>{{$item1P->N_IngresosP}}</td>
                            <td>{{$item1P->C_ProsecucionP}}</td>
                            <td>{{$item1P->C_EgresadosP}}</td>

                            <td>
                                <form class="eliminar_ResumenPostGrado" action="{{route("ResumenMatriculaPostGrado.destroy", $item1P->id)}}"  method="POST">
                            	<div class="form-button-action">    
                                    <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editResumenPostGrado{{$item1P->id}}"><i class="fa fa-edit"></i></a>
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
            <div class="modal fade" id="editResumenPostGrado{{$item1P->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modificar Datos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- with amenaza.update I indicate where it's gonna be the change Jp--}}
                        {{-- $amenaza is the reference the item that it's gonna be changed Jp--}}            
                        <form class="ResumenPostgrado1Cambios" action="{{route("ResumenMatriculaPostGrado.update", $item1P->id)}}" method="POST">
                            {{ csrf_field() }} {{   method_field('PUT')   }}

                            
                            <div class="form-group col-md-12">
                                <label>Nombre del Postgrado</label>
                                <input type="text" class="form-control"  name="editNombre_CarreraPostgrado" placeholder="Ej: Informática Avanzada"  maxlength="30" required value="{{$item1P->Nombre_PostGrado}}">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="Apellidos">Tipo de Postgrado</label>
                                <input type="text" class="form-control" name="editTipo_Postgrado" placeholder="Ej: Maestría" maxlength="15" required value="{{$item1P->TipoPostgrado}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Cantidad N. Ingresos</label>
                                <input type="text"  class="form-control" name="editCantidad_NuevoIngresoPostgrado" required placeholder="Cantidad Númerica" maxlength="10"  value="{{$item1P->N_IngresosP}}"  pattern="\d*" title="Campo Numerico">

                            </div>

                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Cantidad Prosecución</label>
                                <input type="text"  class="form-control" name="editCantidad_ProsecucionPostgrado" required placeholder="Cantidad Númerica" maxlength="10"  value="{{$item1P->C_ProsecucionP}}" pattern="\d*" title="Campo Numerico">

                            </div>
            
                            <div class="form-group col-md-12">
                                <label>Cantidad de Egresados</label>
                                <input type="text" class="form-control" name="editCantidad_EgresadosPostgrado" placeholder="Cantidad Númerica" maxlength="10" required value="{{$item1P->C_EgresadosP}}" pattern="\d*" title="Campo Numerico">
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
    $('.añadirRessumenPostGrado1').on('submit', function(e) {
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
$('.ResumenPostgrado1Cambios').submit(function(e){
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

//eliminar 
$('.eliminar_ResumenPostGrado').submit(function(e){
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

