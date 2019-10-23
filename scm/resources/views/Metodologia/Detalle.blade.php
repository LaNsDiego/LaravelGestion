@extends('layouts.default')
@section('content')
<div class="app-title">
    <div>
        <h1>Metodología RUP</h1>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile p-0">
            <!-- accordion -->
            <div class="accordion" id="accordionFase">
                <!-- item -->
                <div class="card">
                    <!-- header -->
                    <div class="card-header"> 
                        <a href="#" data-toggle="collapse" data-target="#Fase1">Analisis</a>
                    </div>
                    <!-- body -->
                    <div id="Fase1" class="collapse show" data-parent="#accordionFase">
                        <div class="card-body">
                            <!-- elemento -->
                            <div class="elemento-item">
                                <a href="">Elemento de configuracion 1</a>
                            </div>
                            <!-- elemento -->
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="card">
                    <!-- header -->
                    <div class="card-header"> 
                        <a href="#" data-toggle="collapse" data-target="#Fase2">Diseño</a>
                    </div>
                    <!-- body -->
                    <div id="Fase2" class="collapse" data-parent="#accordionFase">
                        <div class="card-body">
                            <!-- elemento -->
                            <div class="elemento-item">
                                <a href="">Elemento de configuracion 1</a>
                            </div>
                            <!-- elemento -->
                        </div>
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="card">
                    <!-- header -->
                    <div class="card-header"> 
                        <a href="#" data-toggle="collapse" data-target="#Fase3">Implementacion</a>
                    </div>
                    <!-- body -->
                    <div id="Fase3" class="collapse" data-parent="#accordionFase">
                        <div class="card-body">
                            <!-- elemento -->
                            <div class="elemento-item">
                                <a href="">Elemento de configuracion 1</a>
                            </div>
                            <!-- elemento -->
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- accordion -->
        </div>
    </div>
</div>
@stop