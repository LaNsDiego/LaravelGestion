@extends('layouts.default')
@section('content')

<!-- title -->
<div class="app-title">
    <h1>Nueva Metodología</h1>
</div>
<!-- content -->
<div class="row">
    <div class="col-md-12">
        <form action="/metodologia/guardar" method="POST">
            <div class="tile">
                <div class="tile-body">     
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input class="form-control" name="nombre" type="text">
                    </div>
                </div>
                <div class="tile-footer">
                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Crear Metodología</button>
                    </div>
                </div>
            </div>
            <!-- fases -->
        </form>
    </div>
</div>

<script>
    
</script>
@stop