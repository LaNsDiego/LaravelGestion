<?php

namespace App\Http\Controllers;
use App\Models\SolicitudCambio as SolicitudCambio;
use App\Models\Proyecto as Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SolicitudCambioController extends Controller
{
    public function listar(){

        $SolicitudCambio = DB::table('solicitud_cambio')
            ->join('proyecto', 'solicitud_cambio.proyectoid', '=', 'proyecto.id')
            ->select('solicitud_cambio.*', 'proyecto.nombre as Nombre_Proyecto')
            ->orderBy('id','DESC')
            ->get();
        return view('SolicitudCambio.listar', ['solicitudcambio' => $SolicitudCambio]);

    }
    public function create(){

        $Proyecto = DB::table('proyecto')
                    ->get();
        return view('SolicitudCambio.agregar', ['AProyecto' => $Proyecto]);
    }


    public function store(Request $request){
        
        $solicitudcambio = new SolicitudCambio;
        $solicitudcambio->proyectoid = $request->Proyecto_Id;
        $solicitudcambio->miembrosolicitanteid = 1;
        $solicitudcambio->fecha = $request->Fecha;
        $solicitudcambio->objetivo = $request->Objetivo;
        $solicitudcambio->descripcion = $request->Descripcion;
        $solicitudcambio->estado = 1;
        $solicitudcambio->miembrojefeid = 1;
        $solicitudcambio->save();
        return redirect()->route('SolicitudCambio.listar');
    
    }

    public function edit($SolicitudId){
        $Proyecto = DB::table('proyecto')
                    ->get();
        $solicitudcambio = DB::table('solicitud_cambio')
                            ->join('usuario', 'solicitud_cambio.miembrosolicitanteid', '=', 'usuario.id')
                            ->select('solicitud_cambio.*', 'usuario.usuario as Usuario_Solicitante')
                            ->where('solicitud_cambio.id', $SolicitudId)
                            ->first();

                           
            

        return view('SolicitudCambio.editar',['AProyecto' => $Proyecto, 'solicitudcambio' => $solicitudcambio ] );
    }
    public function update(Request $request){
    
        $solicitudcambio = SolicitudCambio::find($request->id);
        
        $solicitudcambio->proyectoid = $request->Proyecto_Id;
        $solicitudcambio->miembrosolicitanteid = 1;
        $solicitudcambio->fecha = $request->Fecha;
        $solicitudcambio->objetivo = $request->Objetivo;
        $solicitudcambio->descripcion = $request->Descripcion;
        $solicitudcambio->estado = 1;
        $solicitudcambio->miembrojefeid = 1;
        $solicitudcambio->save();
        return redirect()->route('SolicitudCambio.listar');
    
    }
    public function atender($SolicitudId){
        $Proyecto = DB::table('proyecto')
                    ->get();
                    $solicitudcambio = DB::table('solicitud_cambio')
                    ->join('usuario', 'solicitud_cambio.miembrosolicitanteid', '=', 'usuario.id')
                    ->select('solicitud_cambio.*', 'usuario.usuario as Usuario_Solicitante')
                    ->where('solicitud_cambio.id', $SolicitudId)
                    ->first();
        return view('SolicitudCambio.atender',['AProyecto' => $Proyecto, 'solicitudcambio' => $solicitudcambio ] );
    }
    public function delete(){
        return view('SolicitudCambio.agregar');
    }

   

    
}

?>
