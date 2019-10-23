@extends('layouts.default')
@section('content')

<!-- title -->
<div class="app-title">
    <h1><i class="fa fa-dashboard"></i> Listado de Proyectos </h1>
</div>
<!-- content -->
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body table-responsive">
        <table class="table table-hover table-bordered" id="TableData">
          <thead>
            <tr>
              <th class="text-center" width="25px">#</th>
              <th>NOMBRE DEL PROYECTO</th>
              <th>FECHA DE INICIO</th>
              <th>FECHA DE FINALIZACION</th>
              <th class="text-center">ESTADO</th>
              <th class="text-center" width="100px">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ListaProyecto as $Proyecto)
                <tr>
                    <td class="text-center">{{$Proyecto->id}}</td>
                    <td>{{$Proyecto->nombre}}</td>
                    <td>{{$Proyecto->fechainicio}}</td>
                    <td>{{$Proyecto->fechatermino}}</td>
                    <td class="text-center">{{$Proyecto->estado}}</td>
                    <td>
                        <a href="/proyecto/p{{$Proyecto->id}}" class="btn btn-success btn-sm text-uppercase">Seleccionar</a>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@stop