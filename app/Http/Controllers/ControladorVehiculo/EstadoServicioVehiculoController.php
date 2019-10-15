<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\ModeloVehiculo\EstadoService;
use App\ModeloVehiculo\EstadoServicioVehiculo;
use App\ModeloVehiculo\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadoServicioVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosestservvehi= DB::table('estado_servicio_vehiculos')
            ->join('estado_services','estado_services.est_id','=','estado_servicio_vehiculos.est_id')
            ->select('estado_servicio_vehiculos.*','estado_services.est_descripcion')
            ->get();
        return view('vehiculos.estadoserviciovehiculosview.indexestadovehiculo', compact('datosestservvehi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placas = DB::table('vehiculos')
            ->select('placa_id')
            ->get();
        $datosestado = EstadoService::all();
        return view('vehiculos.estadoserviciovehiculosview.createestadovehiculo',compact('placas','datosestado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estservvehiculo = new EstadoServicioVehiculo();
        $estservvehiculo->fecha_inicio = $request->fecha_inicio;
        $estservvehiculo->motivo = $request->motivo;
        $estservvehiculo->est_id = $request->est_id;
        $estservvehiculo->placa_id = $request->placa_id;
        $estservvehiculo->save();
        return "EXITO EN GUARDAR EST_SERV_VEHICULO";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModeloVehiculo\EstadoServicioVehiculo  $estadoServicioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(EstadoServicioVehiculo $estadoServicioVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModeloVehiculo\EstadoServicioVehiculo  $estadoServicioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(EstadoServicioVehiculo $estadoServicioVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModeloVehiculo\EstadoServicioVehiculo  $estadoServicioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadoServicioVehiculo $estadoServicioVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModeloVehiculo\EstadoServicioVehiculo  $estadoServicioVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadoServicioVehiculo $estadoServicioVehiculo)
    {
        //
    }
}
