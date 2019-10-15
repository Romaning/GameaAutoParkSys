<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloVehiculo\Seguro;
use Illuminate\Http\Request;

class SeguroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request->all());*/

        $gestiones = $request->campoa;
        $texto= $request->campob;
        $empresa_aseguradora = $request->campoc;
        $fecha_vigencia = $request->campod;
        $archivo_subido = $request->campoe;
        $placa_id = $request->placa_id;
        for ($i=0; $i< count($gestiones); $i++){
            $seguro = new Seguro();
            $seguro->gestion = $gestiones[$i];
            $seguro->texto = $texto[$i];
            $seguro->empresa_aseguradora = $empresa_aseguradora[$i];
            $seguro->fecha_vigencia = $fecha_vigencia[$i];
            $seguro->archivo_subido = $archivo_subido[$i];
            $seguro->placa_id = $placa_id;
            $seguro->save();
        }
        return "VER".$i;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModeloVehiculo\Seguro  $seguro
     * @return \Illuminate\Http\Response
     */
    public function show(Seguro $seguro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModeloVehiculo\Seguro  $seguro
     * @return \Illuminate\Http\Response
     */
    public function edit(Seguro $seguro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModeloVehiculo\Seguro  $seguro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seguro $seguro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModeloVehiculo\Seguro  $seguro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seguro $seguro)
    {
        //
    }
}
