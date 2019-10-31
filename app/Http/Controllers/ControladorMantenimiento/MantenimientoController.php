<?php

namespace App\Http\Controllers\ControladorMantenimiento;

use App\Http\Controllers\Controller;
use App\ModeloMantenimiento\Mantenimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MantenimientoController extends Controller
{
    /**
     * mantenimiento_id',
     * 'mant_id_ini_asign',
     * 'fecha_inicio_mant',
     * 'placa_id_mant',
     * 'detalle_mant',
     * 'tipo_mant',
     * 'empresa_encargada_mant',
     * 'mant_id_fin_asign',
     * 'fecha_fin_mant',
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosmants = Mantenimiento::all();
        return view('mantenimientos.indexmantenimiento', compact('datosmants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $tiposMant = DB::table('tipo_mantenimientos')
            ->select('*')
            ->whereNull('deleted_at')
            ->get();
        return view('mantenimientos.createmantenimiento', compact('datosvehiculo', 'tiposMant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $mant = new Mantenimiento();
        $mant->fecha_inicio_mant = $request->fecha_inicio_mant;
        $mant->placa_id_mant = $request->placa_id_mant;
        $mant->detalle_mant = $request->detalle_mant;
        $mant->tipo_mant = $request->tipo_mant;
        $mant->empresa_encargada_mant = $request->empresa_encargada_mant;
        $mant->save();
        $idInsert = $mant->mantenimiento_id;
        $mant->mant_id_ini_asign = "M".$idInsert;
        $mant->save();
        $newMantInst = Mantenimiento::find($idInsert);
        if(empty($request->has('fecha_fin_mant'))){
            $newMantInst->mant_id_fin_asign = "MF".$idInsert;
            $newMantInst->fecha_fin_mant = $request->fecha_fin_mant;
            $newMantInst->update();
        }
        return "EXITO";
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show( $mantenimiento)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $tiposMant = DB::table('tipo_mantenimientos')
            ->select('*')
            ->whereNull('deleted_at')
            ->get();
        $datosMantenimientos = Mantenimiento::find($mantenimiento);
        /*dd($datosMantenimientos);*/
        $imagenesPerfilVehiculo = DB::table('mantenimientos')
            ->join('imagenes_perfil_vehiculos','mantenimientos.placa_id_mant','=','imagenes_perfil_vehiculos.placa_id')
            ->where('mantenimientos.mantenimiento_id','=',$mantenimiento)
            ->whereNull('mantenimientos.deleted_at')
            ->whereNull('imagenes_perfil_vehiculos.deleted_at')
            ->select('imagenes_perfil_vehiculos.archivo_subido')
            ->get();
        return view('mantenimientos.showmantenimiento',compact('datosMantenimientos','tiposMant','datosvehiculo','imagenesPerfilVehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit( $mantenimiento)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $tiposMant = DB::table('tipo_mantenimientos')
            ->select('*')
            ->whereNull('deleted_at')
            ->get();
        $datosMantenimientos = Mantenimiento::find($mantenimiento);
        /*dd($datosMantenimientos);*/
        return view('mantenimientos.editmantenimiento',compact('datosMantenimientos','tiposMant','datosvehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $mantenimiento)
    {
        $mant = Mantenimiento::find($mantenimiento);

        $mant->fecha_inicio_mant = $request->fecha_inicio_mant;
        $mant->placa_id_mant = $request->placa_id_mant;
        $mant->detalle_mant = $request->detalle_mant;
        $mant->tipo_mant = $request->tipo_mant;
        $mant->empresa_encargada_mant = $request->empresa_encargada_mant;
        if($request->has('fecha_fin_mant')){
            $mant->mant_id_fin_asign = "MF".$mantenimiento;
            $mant->fecha_fin_mant = $request->fecha_fin_mant;
        }
        $mant->update();
        return "EXITO";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy( $mantenimiento)
    {
        Mantenimiento::find($mantenimiento)->delete();
        return "ELIMANDO";
    }
}
