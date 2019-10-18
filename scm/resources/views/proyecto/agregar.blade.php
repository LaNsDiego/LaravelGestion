@extends('layouts.default')
@section('content')

<!-- title -->
<div class="app-title">
    <h1><i class="fa fa-dashboard"></i> Agregar de Proyecto</h1>
</div>
<!-- content -->
<div class="row">
    <div class="col-md-12">
        <form action="/proyecto/guardar" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="tile">
                <h3 class="tile-title">Datos del Proyecto</h3>
                <div class="tile-body">     
                    <div class="form-group">
                        <label class="control-label">Nombre de Proyecto</label>
                        <input class="form-control" name="nombre" type="text">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="control-label">Fecha de Inicio</label>
                            <input class="form-control" name="fechainicio" type="date">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Fecha de Termino</label>
                            <input class="form-control" name="fechatermino" type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" rows="4"></textarea>
                    </div>
                    <!-- <div class="form-group"> -->
                        <input type="hidden" name="usuariojefeid" value="1">
                        <!-- <label class="control-label">Responsable</label>
                        <input class="form-control" name="responsable" type="text" readonly>
                    </div> -->
                </div>
            </div>
            <!-- fases -->
            <div class="tile">
                <h3 class="tile-title">Datos de la Metodología del Proyecto</h3>
                <div class="tile-body">
                    <div class="form-group">
                        <!-- HIDDEN identificadores de metodologia -->
                        <input type="hidden" name="fases[]" value="1">
                        <input type="hidden" name="fases[]" value="2">
                        <input type="hidden" name="fases[]" value="3">
                        <input type="hidden" name="fases[]" value="4">

                        

                        <label class="control-label">Nombre de Proyecto</label>
                        <select name="metodologiaid" class="form-control">
                            <option value="">Seleccione una Metodología</option>
                            <option value="1">RUP</option>
                        </select>
                    </div>
                    <!-- tabs -->
                    <div class="bs-component">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#fase1">FASE 1</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fase2">FASE 2</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fase3">FASE 3</a></li>
                        </ul>
                        <!-- tab content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- tab 1 -->
                            <div class="tab-pane fade active show" id="fase1">
                                <div class="pt-3">
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="1[]" value="elemento1" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="1[]" value="elemento2" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="1[]" value="elemento3" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="1[]" value="elemento4" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="1[]" value="elemento5" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="1[]" value="elemento6" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                </div>
                            </div>
                            <!-- tab 2 -->
                            <div class="tab-pane fade" id="fase2">
                            <div class="pt-3">
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento1" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento2" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento3" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento4" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento5" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento6" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento7" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento8" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento9" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento10" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento11" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="2[]" value="elemento12" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                </div>
                            </div>
                            <!-- tab 3 -->
                            <div class="tab-pane fade" id="fase3">
                            <div class="pt-3">
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="3[]"  value="elemento1"  type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="3[]"  value="elemento2" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="3[]"  value="elemento3" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                    <!-- checkbox -->
                                    <div class="animated-checkbox">
                                        <label>
                                            <input name="3[]"  value="elemento4" type="checkbox"><span class="label-text">Elemento</span>
                                        </label>
                                    </div>
                                    <!-- checkbox -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary text-uppercase" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Crear Proyecto</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    
</script>
@stop