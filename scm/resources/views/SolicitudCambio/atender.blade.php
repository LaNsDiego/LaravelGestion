@extends('layouts.default')
@section('content')

<!-- title -->
<div class="app-title">
    <h1><i class="fa fa-dashboard"></i> Atender Solicitud de  Cambio</h1>
</div>
<!-- content -->
<div class="row">
    <div class="col-md-12">
        <form action="/SolicitudCambio/guardar" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" value="{{$solicitudcambio->id}}" name="id" id="id">
            <div class="tile">
                <h3 class="tile-title">Datos del Proyecto</h3>
                <div class="tile-body">     
                        <div class="form-group row">
                            <div class="col-md-10">
                                <label class="control-label">Proyecto </label>
                                <select class="form-control" name="Proyecto_Id" id="Proyecto_Id">
                                        @foreach($AProyecto as $be)
                                        <option value="{{ $be->id }}" {{ $be->id == $solicitudcambio->proyectoid ? 'selected':'' }}>{{ $be->nombre }}</option>
                                        @endforeach
    
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label">Fecha </label>
                            <input type="date" value="{{ $solicitudcambio->fecha }}" class="form-control" id="Fecha" name="Fecha">
                            </div>
                            
                        </div>
                    
                </div>
            </div>
            <!-- fases -->
            <div class="tile">
                <h3 class="tile-title">Datos de la Solicitud de Cambio</h3>
                <div class="tile-body">
                    <div class="form-group row">
                        <div class="col-md-10">
                            <label class="control-label">Objetivo</label>
                            <input type="text" value="{{ $solicitudcambio->objetivo }}" class="form-control" id="Objetivo" name="Objetivo">
                        </div>
                        <div class="col-md-2">
                            <label for="control-label">Solicitante</label>
                            <input type="text" value="{{ $solicitudcambio->Usuario_Solicitante }}" class="form-control" readonly id="Solicitante" name="Solicitante">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" rows="4">{{ $solicitudcambio->descripcion }}</textarea>
                    </div>

                    <div class="form-group row">

                        <div class= "col-md-3">
                            <label class="control-label">Estado</label>
                            <select name="Estado" id="Estado" class="form-control">
                                        <option {{ $solicitudcambio->estado == 1 ? 'selected':'' }} value="1">Pendiente</option>
                                        <option {{ $solicitudcambio->estado == 2 ? 'selected':'' }} value="2">Aprobado</option>
                                        <option {{ $solicitudcambio->estado == 3 ? 'selected':'' }} value="3">Rechazado</option>
                            </select>
                        </div>
                        <div class="col-md-6"></div>
                        <div class= "col-md-3">
                            <label class="control-label">.</label>
                            
                            <button type="button"  data-toggle="modal" data-target="#exampleModal" class="btn btn-info form-control">GENERAR INFORME</button>
                        </div>

                        
                    </div>
                  
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary text-uppercase" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Crear Solicitud</button>
                </div>
            </div>
        </form>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informe de Cambio </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group row">
                <div class="col-md-3">
                    <label class="control-label">Costo Economico </label>
                    <input type="number" value="0.00" step="any" class="form-control text-right" name="Costo_Economico" id="Costo_Economico">
                </div>

                <div class="col-md-3">
                    <label class="control-label">Tiempo Estimado </label>
                    <input type="number" value="0" step="any" class="form-control text-right" name="Costo_Economico" id="Costo_Economico">
                </div>

                <div class="col-md-6">
                    <label class="control-label">Observacion </label>
                    <input type="text" value="" step="any" class="form-control text-left" name="Costo_Economico" id="Costo_Economico">
                </div>




                <div class="col-md-12">
                <br><br>
                    <h5 class="tile-title">Elementos de Configuración</h5>
                </div>


            
                
               
                <div class="col-md-3">
                    <label class="control-label">Fases </label>
                    <select name="Fase" id="Fase" class="form-control">
                        <option value="1">Fase 1</option>
                        <option value="1">Fase 2</option>
                        <option value="1">Fase 3</option>
                        <option value="1">Fase 4</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="control-label">ESC </label>
                    <select name="ESC" id="ESC" class="form-control">
                        <option value="1">Diagrama de caso de uso</option>
                        <option value="1">Fase 2</option>
                        <option value="1">Fase 3</option>
                        <option value="1">Fase 4</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="control-label">Tiempo </label>
                    <input type="number" class="form-control" id="Tiempo" name="Tiempo">
                </div>

                <div class="col-md-3">
                    <label class="control-label">Costo </label>
                    <input type="number" step="any" class="form-control" id="Tiempo" name="Tiempo">
                </div>


                <div class="col-md-12">
                    <label class="control-label">Descripcion </label>
                    <textarea name="Descripcion" id="Descripcion" cols="30" rows="3" class="form-control"></textarea>
                </div>

             
                
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <label class="control-label">. </label>
                    <input type="button" class="form-control btn btn-info" id="" name="" value="AGREGAR">
                </div>


                <div class="col-md-12">
                <br>
                </div>
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">ECS</th>
                            <th class="text-center">Tiempo</th>
                            <th class="text-center">Costo</th>
                            <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-left">Caso de Uso</td>
                                <td class="text-left">3 Horas</td>
                                <td class="text-right">S/. 100.00</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-2x m-0" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-left">Caso de Uso</td>
                                <td class="text-left">3 Horas</td>
                                <td class="text-right">S/. 100.00</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-2x m-0" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-left">Caso de Uso</td>
                                <td class="text-left">3 Horas</td>
                                <td class="text-right">S/. 100.00</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-2x m-0" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                   
                            
                        </tbody>
                    </table>
                </div>
                
                
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script>
    
</script>
@stop