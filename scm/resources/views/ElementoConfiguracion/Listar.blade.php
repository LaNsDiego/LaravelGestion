@extends('layouts.default')
@section('content')

<!-- title -->
<div class="app-title">
    <div>
        <h1>Elemento de configuración Version 1.0</h1>
        <p>Fase Analisis - Proyecto x</p>
    </div>
</div>
<!-- content -->
<div class="row">
  <div class="col-md-12">
    <div class="tile">
        <!-- tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link text-uppercase active" href="#Task" data-toggle="tab">Tareas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Dependencies" data-toggle="tab">DEPENDENCIAS</a>
            </li>
        </ul>
        <!-- tabs content -->
        <div class="tab-content pt-3">
            <!-- tab content 1 -->
            <div class="tab-pane fade show active" id="Task">
                <div class="text-right py-2">
                    <a href="#" data-toggle="modal" data-target="#ModalAgregarTarea" class="btn btn-primary btn-sm text-uppercase">Agregar</a>
                </div>
                <!-- Tareas -->
                <div class="task-item">
                    <a href="#" data-toggle="modal" data-target="#ModalVerTarea">Tarea 1</a>
                </div>
                <!-- Tareas -->
                <!-- Tareas -->
                <div class="task-item">
                    <a href="">Tarea 1</a>
                </div>
                <!-- Tareas -->
            </div>
            <!-- tab content 1 -->
            <!-- tab content 2 -->
            <div class="tab-pane fade" id="Dependencies">
                <!-- Dependencias -->
                Dependencias
                <!-- Dependencias -->
            </div>
            <!-- tab content 2 -->
        </div>   
        <!-- tabs -->
    </div>
  </div>
</div>

<!-- Modal Agregar Tarea -->
<div class="modal fade" id="ModalAgregarTarea" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Nueva Tarea</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form>
            <div class="form-group">
                <label class="label-control">Nombre</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="label-control">Fecha de inicio</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label class="label-control">Fecha de finalización</label>
                    <input type="date" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="label-control">Responsable</label>
                <select class="form-control">
                    <option value="">Diego Layme</option>
                    <option value="">Luis Moreno</option>
                    <option value="">Angel Gonzales</option>
                    <option value="">Yonathan Mamani</option>
                    <option value="">Alex Ticona</option>
                </select>
            </div>
            <div class="form-group pt-2">
                <button type="submit" class="btn btn-primary text-uppercase">Agregar Tarea</button>
            </div>
        </form>
        <!-- form -->
      </div>
    </div>
  </div>
</div>
<!-- Modal Agregar Tarea -->
<!-- Modal Editar Tarea -->
<div class="modal fade" id="ModalVerTarea" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">#TSK-1: Tarea 1</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <form>
            <div class="form-group">
                <label class="label-control">Nombre</label>
                <input type="text" class="form-control" readonly>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="label-control">Fecha de inicio</label>
                    <input type="date" class="form-control" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label class="label-control">Fecha de finalización</label>
                    <input type="date" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
                <label class="label-control">Responsable</label>
                <select class="form-control" readonly>
                    <option value="">Diego Layme</option>
                    <option value="">Luis Moreno</option>
                    <option value="">Angel Gonzales</option>
                    <option value="">Yonathan Mamani</option>
                    <option value="">Alex Ticona</option>
                </select>
            </div>
            <div class="w-100">
                <h5>Evidencia</h5>
                <div class="form-group">
                    <label class="label-control">URL de la evidencia</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label class="label-control">Estado</label>
                    <select class="form-control">
                        <option value="">Abierto</option>
                        <option value="">En proceso</option>
                        <option value="">Finalizado</option>
                    </select>
                </div>
            </div>
            <div class="form-group pt-2">
                <button type="submit" class="btn btn-primary text-uppercase">Agregar Tarea</button>
            </div>
        </form>
        <!-- form -->
      </div>
    </div>
  </div>
</div>
<!-- Modal Editar Tarea -->
@stop