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
        return view('vehiculos.segurosview.createseguroOther', compact('placas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return "AMOR SEGURO STORE";*/
        /*dd($request->all());*/
        $placa_id = $request->placa_id;
        $gestiones = $request->campoa;
        $texto = $request->campob;
        $empresa_aseguradora = $request->campoc;
        $fecha_vigencia = $request->campod;
        $archivo_subido = $request->file('campoe');

        for ($i = 0; $i < count($gestiones); $i++) {
            $seguro = new Seguro();

            $seguro->placa_id = $placa_id[$i];
            $seguro->gestion = $gestiones[$i];
            $seguro->texto = $texto[$i];
            $seguro->empresa_aseguradora = $empresa_aseguradora[$i];
            $seguro->fecha_vigencia = $fecha_vigencia[$i];

            $imageName = $placa_id[$i] . "" . $archivo_subido[$i]->getClientOriginalName();
            $imageName = str_replace(" ", "_", $imageName);
            $archivo_subido[$i]->move(public_path('carpeta_imagenes'), $imageName);

            $seguro->archivo_subido = $imageName;
            /*$File = file($archivo_subido[$i]);
                    $archivo_subido = $request->file('campoe');
            $imageName = $placa_id[$i].$File->getClientOriginalName();
            $File->move(public_path('carpeta_imagenes'), $imageName);*/

            $seguro->save();
        }
        return redirect()->route('seguro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ModeloVehiculo\Seguro $seguro
     * @return \Illuminate\Http\Response
     */
    public function show($seguro)
    {
        $placas = DB::table('vehiculos')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->get();
        $seguro = Seguro::find($seguro);
        /*dd($seguro);*/
        return view('vehiculos.segurosview.showseguro', compact('seguro', 'placas'));
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
        /*dd($seguro);*/
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

        $seguro = Seguro::find($seg);
        $seguro->gestion = $request->campoa;
        $seguro->texto = $request->campob;
        $seguro->empresa_aseguradora = $request->campoc;
        $seguro->fecha_vigencia = $request->campod;

        if ($request->hasFile('campoe')){ /*EXISTE ALGUN ARCHIVO SUBIDO ? SI*/
            /* GUARDAMOS UN ARCHIVO A LA CARPETA PUBLIC DEL PROYECTO */
            $archivoimag = $request->file('campoe');
            $nombrearchivo = $request->placa_id."".$archivoimag->getClientOriginalName();
            $nombrearchivo =  str_replace(" ", "_", $nombrearchivo);
            $archivoimag->move(public_path('carpeta_imagenes'),$nombrearchivo);

            /* BUSCAMOS EL ANTIGUO NOMBRE PARA ELIMINAR DE LA BD*/
            $nombreImgParaDarArchivo = DB::table('seguros')
                ->where('seguros.id','=',$seg)
                ->select('seguros.archivo_subido')
                ->get();

            /* ELIMINAMOS LA IMAGEN DE LA CARPETA DE IMAGENES DEL PROYECTO */
            $path = public_path().'/carpeta_imagenes/'.$nombreImgParaDarArchivo[0]->archivo_subido;
            if (file_exists($path)) {
                unlink($path);
            }

            /* AHORA QUE YA HEMOS OBTENIDO EL NOMBRE PARA OTROS BENEFICIOS AHORA LO REEMPLAZAMOS*/
            $seguro->archivo_subido = $nombrearchivo;
        }
        else{
            /*ENTONCES NO CAMBIAMOS NADA EN ARCHIVOS Y BD ARHIVO_SUBIDO*/
        }
        $seguro->placa_id = $request->placa_id;
        $seguro->update();

        return redirect()->route('seguro.index');
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
        $archivo_subido = DB::table('seguros')
            ->where('seguros.id', '=', $seguro)
            ->select('seguros.archivo_subido')
            ->get();

        $archivo_subido[0]->archivo_subido =  str_replace(" ", "_", $archivo_subido[0]->archivo_subido);
        $path = public_path() . '/carpeta_imagenes/' . $archivo_subido[0]->archivo_subido;
        if (file_exists($path)) {
            unlink($path);
        }

        Seguro::where('id', $seguro)->forceDelete();
        return redirect()->route('seguro.index');
    }
}
