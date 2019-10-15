<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloVehiculo\DocumentosRonovableVehiculo;
use App\ModeloVehiculo\Vehiculo;
use Illuminate\Http\Request;

class DocumentosRonovableVehiculoController extends Controller
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
        $docsrenovables= new DocumentosRonovableVehiculo();
        $docsrenovables->gestion=$request->gestion;
        $docsrenovables->fecha_fin_cobertura_soat = $request->fecha_fin_cobertura_soat;

        if (isset($request->bsisa)){
            $docsrenovables->bsisa=$request->bsisa;
        }
        else{
            $docsrenovables->bsisa="0";
        }
        if (isset($request->inspeccion_vehicular)){
            $docsrenovables->inspeccion_vehicular = $request->inspeccion_vehicular;
        }
        else{
            $docsrenovables->inspeccion_vehicular="0";
        }

        $docsrenovables->placa_id = $request->placa_id;
        $docsrenovables->save();
        return "VER";
    }
    public function autocompletarDocsRenov(Request $request)
    {
        $requiere = 1;
        if (isset($request->requerimiento)){
            $requiere = $request->requerimiento;
        }
        if ($requiere==2){
            $lista_array_archivos = array();
            $directorio = public_path().'/caperta_imagenes/';
        }

        $lista_array_archivos[]=array('nombre'=>'2911PHCadelante.jpg', 'tamano'=>'2MB', 'carpetamasarchivo'=>'carpeta_imagenes/2911PHCadelante.jpg', 'path'=>$directorio);
        $lista_array_archivos[]=array('nombre'=>'2911PHCatras.jpg', 'tamano'=>'2MB', 'carpetamasarchivo'=>'carpeta_imagenes/2911PHCatras.jpg','path'=>$directorio);
        $lista_array_archivos[]=array('nombre'=>'2911PHCderecha.jpg', 'tamano'=>'2MB', 'carpetamasarchivo'=>'carpeta_imagenes/2911PHCderecha.jpg','path'=>$directorio);
        return response()->json($lista_array_archivos);
    }
    public function autocompletarDocsRenovOriginal(Request $request)
    {
        return response()->json($request->all());
        /*dd($request);*/
        /*return response()->json($request->all());*//*ESTO SIRVE PARA DEVOLVER UN JSON ARRAY*/
        /*return "cariño";*//*ESTE CODIGO ES LA MEJOR QUE HAY CUANDO ENVIAN DESDE FRONTEND*/
        /*return response()->json($request);*/
        /*return "MI VIDA";*/
        /*return response()->json($request->all());*/
        /*return "redirect()->route('vehiculo.create')";*/
        /*return response()->json(['name'=>'roman', 'placa_id'=>'2720RKF']);*/
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\ModeloVehiculo\DocumentosRonovableVehiculo  $documentosRonovableVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($documentosRonovableVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModeloVehiculo\DocumentosRonovableVehiculo  $documentosRonovableVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($documentosRonovableVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModeloVehiculo\DocumentosRonovableVehiculo  $documentosRonovableVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $documentosRonovableVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModeloVehiculo\DocumentosRonovableVehiculo  $documentosRonovableVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($documentosRonovableVehiculo)
    {
        //
    }
}
