<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cronograma;
use App\Models\CronogramaFase;
use App\Models\ElementoConfiguracion;
use App\Models\Metodologia;
use App\Models\MetodologiaFase;
use Illuminate\Http\Request;
use App\Models\Proyecto as Proyecto;
use Illuminate\Support\Facades\Log;

class ProyectoController extends Controller
{
    public function Listar(){
        $ListadoProyecto = Proyecto::get();

        return view('proyecto.listar',[
            'ListadoProyecto' => $ListadoProyecto
        ]);
    }

    public function Ver($ProyectoId)
    {
        $Cronograma = Cronograma::ObtenerPorProyectoId($ProyectoId);
//        Log:info('CronogramaId '.$Cronograma->Id);
        $Proyecto = Proyecto::find($ProyectoId);
        return view('proyecto.ver',[
            'Proyecto' => $Proyecto,
            'Cronograma' => $Cronograma,
            'ListadoFase' => CronogramaFase::where('CronogramaId',$Cronograma->Id)->get(),
            'Metodologia' => Metodologia::find($Proyecto->MetodologiaId)
        ]);
    }

    public function FrmAgregar(){
        $ListadoMetodoliga = Metodologia::Listar();
        return view('proyecto.agregar',[
            'ListadoMetodologia' => $ListadoMetodoliga
        ]);
    }

    public function ActAgregar(Request $request){
//        dd($request);
        $Proyecto = new Proyecto();
        $Proyecto->Codigo = "PRJ002";
        $Proyecto->Nombre = $request->input('Nombre');
        $Proyecto->UsuarioJefeId = $request->input('UsuarioJefeId');
        $Proyecto->FechaInicio = $request->input('FechaInicio');
        $Proyecto->FechaTermino = $request->input('FechaTermino');
        $Proyecto->MetodologiaId = $request->input('MetodologiaId');
        $Proyecto->Descripcion = $request->input('Descripcion');
        $Proyecto->Estado = 'En Progreso';
        $UsuarioId = $Proyecto->UsuarioJefeId;
        if(Proyecto::Agregar($Proyecto) > 0){
            $Cronograma = new Cronograma();
            $Cronograma->ProyectoId= $Proyecto->id;
            $Cronograma->FechaInicio= $request->input('FechaInicio');
            $Cronograma->FechaTermino= $request->input('FechaTermino');

            if(Cronograma::Agregar($Cronograma) > 0){
                $ListadoCronogramaFaseId = $request->input('FasesId');
                Log::info('Cronograma creado');
                if(isset($ListadoCronogramaFaseId)){
                    foreach($ListadoCronogramaFaseId  as $CronogramaFaseId){
                        Log::info('Fase n° :'.$CronogramaFaseId);
                        $CronogramaFase = new CronogramaFase();
                        $CronogramaFase->CronogramaId = $Cronograma->id;
                        $CronogramaFase->Nombre = $CronogramaFaseId;
                        if(CronogramaFase::Agregar($CronogramaFase) > 0){

                            $ListadoElementoId = $request->input($CronogramaFase->Nombre);
                            Log::info('imprimiendo array  elementos');
                            Log::info($ListadoElementoId);
                            foreach( $ListadoElementoId as $ElementoNombre){
                                Log::info('Elemento n°:'.$ElementoNombre);
                                $ElementoConfiguracion = new ElementoConfiguracion();
                                $ElementoConfiguracion->Codigo = "ele".$ElementoNombre;
                                $ElementoConfiguracion->Nombre = $ElementoNombre;
                                $ElementoConfiguracion->FaseId = $CronogramaFase->id;
                                if(ElementoConfiguracion::Agregar($ElementoConfiguracion) > 0){
                                    Log::info('ECS creada con id:'.$ElementoConfiguracion->id);
//                                return redirect()->route('proyecto.listar');
                                }else{
//                                return view('proyecto.listar',['ListadoProyecto ' => Proyecto::ListarPorUsuarioId(1)]);
//                                    return redirect()->action('ProyectoController@Listar');
                                }
//
                            }
                        }else{
////                        return view('proyecto.listar',['ListadoProyecto ' => Proyecto::ListarPorUsuarioId($UsuarioId)]);
                        }
                    }
                }

            }else{
//                return response()->json($Cronograma);
//                return view('proyecto.listar',['ListadoProyecto ' => Proyecto::ListarPorUsuarioId($UsuarioId)]);
            }

        }else{
        }
        return redirect()->route('proyecto.listar');
    }

    public function doPost(){
        $ObjProyecto = Proyecto::find(1);
        return response()->json($ObjProyecto);
    }
}
?>