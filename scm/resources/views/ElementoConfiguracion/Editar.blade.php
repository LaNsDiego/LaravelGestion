@extends('layouts.default')
@section('content')
<!-- title -->
<div class="app-title">
    <div>
        <h1>{{ $ElementoConfiguracion->Nombre }}</h1>
        <p>Fase {{ $Fase->Nombre }} - Metodología {{ $Metodologia->Nombre }}</p>
    </div>
</div>
<!-- content -->
<div class="row">
  <div class="col-md-12">
    <div class="tile">
        <div class="w-100">
            <h4>Editar</h4>
        </div>
        <hr>
        <div class="tile-body">
            <!-- form -->
            <form action="/elemento-configuracion/editar" method="POST">
                <div class="form-group">
                    <label class="control-label">Fase</label>
                    <select name="TxtFase" class="form-control" required>
                    @foreach($ListadoFase as $Fase)
                    <option value="{{ $Fase->Id }}" {{ $Fase->Id == $ElementoConfiguracion->FaseId ? 'selected' : ''}}>{{ $Fase->Nombre }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Código</label>
                    <input type="text" name="TxtCodigo" class="form-control" value="{{ $ElementoConfiguracion->Codigo }}" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Nombre</label>
                    <input type="text" name="TxtNombre" class="form-control" value="{{ $ElementoConfiguracion->Nombre }}" required>
                </div>
                <div class="form-group pt-2">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="TxtId" value="{{ $ElementoConfiguracion->Id }}" required>
                    <input type="hidden" name="TxtMetodologia" value="{{ $Metodologia->Id }}" required>
                    <button type="submit" class="btn btn-primary text-uppercase"><i class="fa fa-check-circle" aria-hidden="true"></i>Guardar Cambios</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
  </div>
</div>
<!-- content -->
@stop