@extends('layouts.default')
@section('content')
<div class="app-title">
    <div>
        <h1>Metodología {{ $Metodologia->Nombre }}</h1>
        <p>{{ $Metodologia->Codigo }}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile p-0">
            <div class="card">
                <div class="card-header card-header-m d-flex align-items-center">
                    <span>Fases de la metodología</span>
                    <a href="#" data-toggle="modal" data-target="#ModalAgregarFase" class="btn btn-sm btn-primary ml-auto"><i class="fa fa-plus" aria-hidden="true"></i>Agregar</a>
                </div>
            </div>
            <!-- accordion -->
            <div class="accordion" id="accordionFase">
                @foreach($ListaFase as $Fase)
                <!-- item -->
                <div class="card">
                    <!-- header -->
                    <div class="card-header card-header-mm d-flex align-items-center"> 
                        <a href="#" data-toggle="collapse" data-target="#Fase{{ $Fase->Id }}">{{ $Fase->Nombre }}</a>
                    </div>
                    <!-- body -->
                    <div id="Fase{{ $Fase->Id }}" class="collapse show_x" data-parent="#accordionFase">
                        <div class="card-body">
                            <!-- element -->
                            <div class="element-item">
                                <div class="element-wrapper d-sm-flex align-items-center">
                                    <div class="element-header py-2 py-lg-0">
                                        <h4 class="element-header__title">Elemento de configuracion 1</h4>
                                        <span class="element-header__code">ECS-1</span>
                                    </div>
                                    <div class="element-control ml-auto">
                                        <a href="" class="btn btn-sm btn-success"><i class="fa fa-pencil" aria-hidden="true"></i>Editar</a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- element -->
                        </div>
                    </div>
                </div>
                <!-- item -->
                @endforeach
            </div>
            <!-- accordion -->
        </div>
    </div>
</div>
<!-- Modal Agregar Fase -->
<div class="modal fade" id="ModalAgregarFase" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nueva Fase</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form action="/fase/agregar" method="POST">
            <div class="form-group">
                <label class="control-label">Nombre</label>
                <input type="text" name="TxtNombre" class="form-control" required>
            </div>
            <div class="form-group pt-2">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="TxtMetodologia" value="{{ $Metodologia->Id }}">
                <button type="submit" class="btn btn-primary text-uppercase"><i class="fa fa-check-circle" aria-hidden="true"></i>Crear fase</button>
            </div>
        </form>
        <!-- form -->
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Fase -->
<!-- Modal Agregar elemento de configuracion -->
<div class="modal fade" id="ModalAgregarElementoConfiguracion" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nuevo elemento de configuración</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form>
            <div class="form-group">
                <label class="control-label">Código</label>
                <input type="text" name="TxtCodigo" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">Nombre</label>
                <input type="text" name="TxtNombre" class="form-control">
            </div>
            <div class="form-group pt-2">
                <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle" aria-hidden="true"></i>Crear elemento</button>
            </div>
        </form>
        <!-- form -->
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar elemento de configuracion -->
@stop