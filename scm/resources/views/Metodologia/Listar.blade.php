@extends('layouts.default')
@section('content')

<!-- title -->
<div class="app-title">
    <h1>Listado de Metodologías</h1>
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
              <th  width="100px">CÓDIGO</th>
              <th>NOMBRE</th>
              <th class="text-center" width="150px">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ListaMetodologia as $Metodologia)
                <tr>
                    <td class="text-center">{{ $Metodologia->id }}</td>
                    <td>{{ $Metodologia->codigo }}</td>
                    <td>{{ $Metodologia->nombre }}</td>
                    <td class="text-center">
                        <a href="/metodologia/m{{ $Metodologia->id }}" class="btn btn-primary btn-sm text-uppercase">Ver</a>
                        <a href="" class="btn btn-success btn-sm text-uppercase">Editar</a>
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