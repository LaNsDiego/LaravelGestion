<?php

namespace App\Http\Controllers;

use App\Models\SolicitudCambio as SolicitudCambio;
use App\Models\Proyecto as Proyecto;
use App\Models\ElementoConfiguracion as ElementoConfiguracion;
use App\Models\Fase as Fase;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SolicitudCambioController extends Controller
{
    public function FrmListar(){

        $SolicitudCambio = SolicitudCambio::Listar(1);
        return view('SolicitudCambio.listar', ['ASolicitudCambio' => $SolicitudCambio]);

    }
    public function FrmAgregar(){
        
        $Proyecto = Proyecto::ListarPorParticipanteId(1);
       
        return view('SolicitudCambio.agregar', ['AProyecto' => $Proyecto]);
    }


    public function ActAgregar(Request $request){
        
        $solicitudcambio = new SolicitudCambio;
        $solicitudcambio->Proyectoid = $request->Proyecto_Id;
        $solicitudcambio->Miembrosolicitanteid = 1;
        $solicitudcambio->Fecha = $request->Fecha;
        $solicitudcambio->Objetivo = $request->Objetivo;
        $solicitudcambio->Descripcion = $request->Descripcion;
        $solicitudcambio->Estado = 1;
        $solicitudcambio->Miembrojefeid = 1;
        $solicitudcambio->Guardar();
        return redirect()->action('SolicitudCambioController@FrmListar');
  
    }

    public function FrmEditar($SolicitudId){
       
        $Proyecto = Proyecto::ListarPorParticipanteId(1);
        $Asolicitudcambio = SolicitudCambio::ObtenerPorId($SolicitudId);
        

        return view('SolicitudCambio.editar',['AProyecto' => $Proyecto, 'solicitudcambio' => $Asolicitudcambio ] );
    }
    public function ActEditar(Request $request){


        // DB::enableQueryLog();
        // dd(DB::getQueryLog());
        // dd($request->all());
        // dd($objsolicitudcambio);

        $objsolicitudcambio = SolicitudCambio::find($request->Id);
        $objsolicitudcambio->Proyectoid = $request->Proyecto_Id;
        $objsolicitudcambio->Fecha = $request->Fecha;
        $objsolicitudcambio->Objetivo = $request->Objetivo;
        $objsolicitudcambio->Descripcion = $request->Descripcion;
        if(SolicitudCambio::Editar($objsolicitudcambio) > 0){
            return redirect()->action('SolicitudCambioController@FrmListar');
        }

    }
    public function FrmAtender($SolicitudId){
        $Proyecto = Proyecto::ListarPorParticipanteId(1);
        $solicitudcambio = SolicitudCambio::ObtenerPorId($SolicitudId);
        $Fase = Fase::ListarPorProyecto($solicitudcambio->Proyectoid);
        session()->forget('DInformeCambio');
        return view('SolicitudCambio.atender',['AProyecto' => $Proyecto, 'Asolicitudcambio' => $solicitudcambio, 'AFase' => $Fase ] );
    }
    public function delete(){
        return view('SolicitudCambio.agregar');
    }

    public function ViewESC(Request $request){
        //  DB::enableQueryLog();
        
        $ECS = ElementoConfiguracion::ListarECSxFase($request->FaseId);
        // dd(DB::getQueryLog());
        $combo = '';
        foreach($ECS as $be){
            $combo.= '<option value="'.$be->Id.'">'.$be->Nombre.'</option>';
        }
        return $combo;
    }

    public function AccDetalleInforme(Request $request){
      
        $Ecs = ElementoConfiguracion::ObtenerPorId($request->ESCId);
        if (session()->exists('DInformeCambio')) {
            
            $data = session('DInformeCambio');
            
            array_push($data,
                array(
                    'FaseId' => $request->FaseId,
                    'ESCId' => $request->ESCId,
                    'ESCNombre' => $Ecs->Nombre,
                    'Tiempo' => $request->Tiempo,
                    'Costo' => $request->Costo,
                    'Descripcion' => $request->Descripcion,
                    'Eliminado' => 0,
                )
            );
            session()->put('DInformeCambio', $data);
            
            return view('SolicitudCambio.detalleinforme', ['ADetalleInforme' => $data]);
        }else{
            session('DInformeCambio');
            $data = array();
            array_push($data,
                array(
                    'FaseId' => $request->FaseId,
                    'ESCId' => $request->ESCId,
                    'ESCNombre' => $Ecs->Nombre,
                    'Tiempo' => $request->Tiempo,
                    'Costo' => $request->Costo,
                    'Descripcion' => $request->Descripcion,
                    'Eliminado' => 0,
                )
            );
            session()->put('DInformeCambio', $data);

            return view('SolicitudCambio.detalleinforme', ['ADetalleInforme' => $data]);
  
        }

 
        
    }

    public function ViewDetalleInforme(){
        // $data = session('DInformeCambio');

        return view('SolicitudCambio.detalleinforme');
    }


    

    
}
