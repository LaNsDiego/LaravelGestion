<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

class ProyectoController extends Controller
{
    public function listar($UsuarioId){
        return view('proyecto.listar',['ListaProyecto' => \App\Models\Proyecto::ListarPorUsuarioId($UsuarioId)]);
    }

    public function guardar(Request $request){
        $Proyecto = new \App\Models\Proyecto();
        $Proyecto->codigo = "PRJ002";
        $Proyecto->nombre = $request->input('nombre');
        $Proyecto->usuariojefeid = $request->input('usuariojefeid');
        $Proyecto->fechainicio = $request->input('fechainicio');
        $Proyecto->fechatermino = $request->input('fechatermino');
        $Proyecto->metodologiaid = $request->input('metodologiaid');
        $Proyecto->Guardar();
        $UsuarioId = $request->input('usuariojefeid');
        if($Proyecto->id > 0){

            $Cronograma = new \App\Models\Cronograma();
            $Cronograma->proyectoid= $Proyecto->id;
            $Cronograma->fechainicio= $request->input('fechainicio');
            $Cronograma->fechatermino= $request->input('fechatermino');
            $Cronograma->Guardar();
            if($Cronograma->id > 0){
                $ListadoCronogramaFaseId = $request->input('fases');
                foreach($ListadoCronogramaFaseId  as $CronogramaFaseId){
                    $CronogramaFase = new \App\Models\CronogramaFase();
                    $CronogramaFase->cronogramaid = $Cronograma->id;
                    $CronogramaFase->metodologiafaseid = $CronogramaFaseId;
                    $CronogramaFase->Guardar();
                    if($CronogramaFase->id > 0){
                        $ListadoElementoId = $request->input($CronogramaFaseId);
                        foreach( $ListadoElementoId as $ElementoId){
                            $ElementoConfiguracion = new \App\Models\ElementoConfiguracion();
                            $ElementoConfiguracion->codigo = "ele"+$ElementoId;
                            $ElementoConfiguracion->nombre = "elemento" + $ElementoId;
                            $ElementoConfiguracion->faseid = $CronogramaFase->id;
                            $ElementoConfiguracion->Guardar();
                            if($ElementoConfiguracion->id > 0){
                                return view('proyecto.listar',['ListaProyecto' => \App\Models\Proyecto::ListarPorUsuarioId($UsuarioId)]);
                            }else{
                                return redirect()->route('proyecto.agregar',$request->input('usuariojefeid'));    
                            }

                        }
                    }else{
                        return redirect()->route('proyecto.agregar',$request->input('usuariojefeid'));    
                    }
                }
                
            }else{
                return redirect()->route('proyecto.agregar',$request->input('usuariojefeid'));    
            }
            
        }else{
            return redirect()->route('proyecto.agregar',$request->input('usuariojefeid'));
        }


        
    }

    public function agregar($UsuarioId){
        return view('proyecto.agregar');
    }
}

?>