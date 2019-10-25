<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloVehiculo\Seguro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeguroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosseguro = DB::table('seguros')
            ->select('*')
            ->orderBy('placa_id')
            ->orderBy('gestion')
            ->get();
        return view('vehiculos.segurosview.indexseguro', compact('datosseguro'));
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
            ->groupBy('placa_id')
            ->get();
        return view('vehiculos.segurosview.createseguro', compact('placas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd($request->all());*/
        $swithc = 0;
        $gestiones = $request->campoa;
        $texto = $request->campob;
        $empresa_aseguradora = $request->campoc;
        $fecha_vigencia = $request->campod;
        $archivo_subido = $request->campoe;
        $placa_id = $request->placa_id;
        if (is_array($placa_id)) {
            $swithc = 1;
        }
        for ($i = 0; $i < count($gestiones); $i++) {
            $seguro = new Seguro();
            $seguro->gestion = $gestiones[$i];
            $seguro->texto = $texto[$i];
            $seguro->empresa_aseguradora = $empresa_aseguradora[$i];
            $seguro->fecha_vigencia = $fecha_vigencia[$i];
            $seguro->archivo_subido = $archivo_subido[$i];
            if ($swithc == 1) {
                $seguro->placa_id = $placa_id[$i];
            } else {
                $seguro->placa_id = $placa_id;
            }
            $seguro->save();
        }
        return "VER" . $i;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ModeloVehiculo\Seguro $seguro
     * @return \Illuminate\Http\Response
     */
    public function show($seguro)
    {
        //
    }

    public function historialSeguros($vehiculo)
    {

        $datosseguro = DB::table('seguros')
            ->where('placa_id', '=', $vehiculo)
            ->get();
        return view('vehiculos.segurosview.historialplacaseguro', compact('datosseguro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ModeloVehiculo\Seguro $seguro
     * @return \Illuminate\Http\Response
     */
    public function edit($seguro)
    {
        $placas = DB::table('vehiculos')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->get();
        $seguro = Seguro::find($seguro);
        return view('vehiculos.segurosview.editseguro', compact('seguro', 'placas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ModeloVehiculo\Seguro $seguro
     * @return string
     */
    public function update(Request $request, $seg)
    {
    }
    public function updateClasis(Request $request, $seg)
    {
        $seguro = Seguro::find($seg);
        $seguro->gestion = $request->campoa;
        $seguro->texto = $request->campob;
        $seguro->empresa_aseguradora = $request->campoc;
        $seguro->fecha_vigencia = $request->campod;
        $seguro->archivo_subido = $request->campoe;
        $seguro->placa_id = $request->placa_id;
        $seguro->update();
        return "VER";
    }


    public function destroy($seguro)
    {
        //
    }
}
