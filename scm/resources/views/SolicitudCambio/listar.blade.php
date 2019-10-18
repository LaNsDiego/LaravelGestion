@extends('layouts.default')
@section('content')

<!-- title -->
<div class="app-title">
    <h1><i class="fa fa-dashboard"></i> Listado de Solicitudes de Cambio </h1>
</div>
<!-- content -->
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body table-responsive">
        <table class="table table-hover table-bordered" id="TableData">
          <thead>
            <tr>
              <th class="text-center" width="5%">#</th>
              <th class="text-center" width="65%">OBJETIVO</th>
              
              <th class="text-center" width="10%">ESTADO</th>
              <th class="text-center" width="10%">FECHA</th>
              <th class="text-center" width="10%">Acciones</th>
            </tr>
          </thead>
          <tbody>
            

            
      
                <tr>
                    <td class="text-center">1</td>
                    <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </td>
                    <td class="text-center">Pendiente</td>
                    <td class="text-center">2019-10-10</td>

                    <td>
                        <a href="../../SolicitudCambio/atender/{{1}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-2x m-0" aria-hidden="true"></i></a>
                        <a href="proyecto/{{1}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil fa-2x m-0" aria-hidden="true"></i></a>
                        <a href="proyecto/" class="btn btn-success btn-sm"><i class="fa fa-calendar fa-2x m-0" aria-hidden="true"></i></a>
                    </td>
                </tr>
    
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@stop