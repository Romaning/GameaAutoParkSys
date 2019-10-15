<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloVehiculo\Clase;
use App\ModeloVehiculo\DocumentosPropiedadVehiculo;
use App\ModeloVehiculo\DocumentosRonovableVehiculo;
use App\ModeloVehiculo\EstadoService;
use App\ModeloVehiculo\ImagenesPerfilVehiculo;
use App\ModeloVehiculo\Marca;
use App\ModeloVehiculo\Seguro;
use App\ModeloVehiculo\Tipo;
use App\ModeloVehiculo\TipoCombustible;
use App\ModeloVehiculo\TipoUso;
use App\ModeloVehiculo\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*SELECT v.placa_id, v.numero_crpva, v.numero_chasis, v.numero_motor, v.marca_id, m.marca_id, m.marca_descripcion
        FROM vehiculos v, marcas m
        WHERE v.marca_id = m.marca_id*/
        /*$datosvehiculosall= Vehiculo::all();*/
        $datosvehiculos = DB::table('vehiculos')
            ->join('marcas', 'marcas.marca_id', '=', 'vehiculos.marca_id')
            ->select('vehiculos.placa_id',
                'vehiculos.numero_crpva',
                'vehiculos.numero_chasis',
                'vehiculos.numero_motor',
                'marcas.marca_descripcion')
            ->get();
        return view('vehiculos.vehiculosview.indexvehiculo', compact('datosvehiculos'));
        /*dd($datosvehiculos);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosclase = Clase::all();
        $datosmarca = Marca::all();
        $datostipo = Tipo::all();
        $datostipo_combustible = TipoCombustible::all();
        $datostipo_uso = TipoUso::all();
        $datosestado = EstadoService::all();
        /*$datosvehiculo = Vehiculo::all();*/
        return view('vehiculos.vehiculosview.createvehiculo', compact('datosclase',
            'datosmarca',
            'datostipo',
            'datostipo_combustible',
            'datostipo_uso',
            'datosestado'/*, 'datosvehiculo'*/));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         * INSERT INTO `vehiculos` (`placa_id`, `numero_crpva`, `numero_chasis`, `numero_motor`, `documento_importacion`,
        `numero_documento_importacion`, `plazas`, `ruedas`, `traccion`, `estado_servicio`, `color`, `clase_id`, `marca_id`,
        `tipo_id`, `tipo_combustible_id`, `tipo_uso_id`, `created_at`, `updated_at`, `deleted_at`)
        VALUES ('asdas', 'asdas', 'asdasd', 'asdasdas', 'asdasdas', '123123', '12321', '12312', 'dasda', 'activo', 'asdsad',
        '1', '2', '3', '2', '1', '2019-10-16 00:00:00', '2019-10-08 00:00:00', NULL);*/
        $vehiculo = new Vehiculo();
        $vehiculo->placa_id = $request->placa_id;
        $vehiculo->numero_crpva = $request->numero_crpva;
        $vehiculo->numero_chasis = $request->numero_chasis;
        $vehiculo->numero_motor = $request->numero_motor;
        $vehiculo->documento_importacion = $request->documento_importacion;
        $vehiculo->numero_documento_importacion = $request->numero_documento_importacion;
        $vehiculo->plazas = $request->plazas;
        $vehiculo->ruedas = $request->ruedas;
        $vehiculo->traccion = $request->traccion;
        $vehiculo->color = $request->color;
        $vehiculo->clase_id = $request->clase_id;
        $vehiculo->marca_id = $request->marca_id;
        $vehiculo->tipo_id = $request->tipo_id;
        $vehiculo->tipo_combustible_id = $request->tipo_combustible_id;
        $vehiculo->tipo_uso_id = $request->tipo_uso_id;
        /*dd($vehiculo);*/
        $vehiculo->save();
        /*return redirect()->route('vehiculo.index')->with('success','Registro Exitoso');*/
        return "Exito en Subir";
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($vehiculo)
    {
        /*SELECT vehiculos.*, clases.clase_descripcion,marcas.marca_descripcion,tipos.tipo_descripcion,tipo_combustibles.tipo_combustible_descripcion,tipo_usos.tipo_uso_descripcion
        FROM vehiculos
        JOIN clases ON clases.clase_id = vehiculos.clase_id
        JOIN marcas ON marcas.marca_id =  vehiculos.marca_id
        JOIN tipos ON tipos.tipo_id = vehiculos.tipo_id
        JOIN tipo_combustibles ON tipo_combustibles.tipo_combustible_id = vehiculos.tipo_combustible_id
        JOIN tipo_usos ON tipo_usos.tipo_uso_id = vehiculos.tipo_uso_id*/
        $datosvehiculo = DB::table('vehiculos')
            ->join('clases', 'clases.clase_id', '=', 'vehiculos.clase_id')
            ->join('marcas', 'marcas.marca_id', '=', 'vehiculos.marca_id')
            ->join('tipos', 'tipos.tipo_id', '=', 'vehiculos.tipo_id')
            ->join('tipo_combustibles', 'tipo_combustibles.tipo_combustible_id', '=', 'vehiculos.tipo_combustible_id')
            ->join('tipo_usos', 'tipo_usos.tipo_uso_id', '=', 'vehiculos.tipo_uso_id')
            ->select('vehiculos.*',
                'clases.clase_descripcion',
                'marcas.marca_descripcion',
                'tipos.tipo_descripcion',
                'tipo_combustibles.tipo_combustible_descripcion',
                'tipo_usos.tipo_uso_descripcion')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();
        /*dd($datosvehiculo);*/
        $datosdocumentospropiedadvehicular = DB::table('vehiculos')
            ->join('documentos_propiedad_vehiculos', 'documentos_propiedad_vehiculos.placa_id', '=', 'vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'documentos_propiedad_vehiculos.archivo_subido', 'documentos_propiedad_vehiculos.nombre_documento_propiedad')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();
        $datosimagenperfilvehicular = DB::table('vehiculos')
            ->join('imagenes_perfil_vehiculos', 'imagenes_perfil_vehiculos.placa_id', '=', 'vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'imagenes_perfil_vehiculos.archivo_subido')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosdocumentosrenovable = DB::table('documentos_ronovable_vehiculos')
            ->select('*')
            ->where('documentos_ronovable_vehiculos.placa_id', '=', $vehiculo)
            ->get();
        $datosseguro = DB::table('seguros')
            ->select('*')
            ->where('seguros.placa_id', '=', $vehiculo)
            ->get();
        return view('vehiculos.vehiculosview.showvehiculo',
            compact('datosvehiculo',
                'datosdocumentospropiedadvehicular',
                'datosimagenperfilvehicular',
                'datosdocumentosrenovable',
                'datosseguro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($vehiculo)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->join('clases', 'clases.clase_id', '=', 'vehiculos.clase_id')
            ->join('marcas', 'marcas.marca_id', '=', 'vehiculos.marca_id')
            ->join('tipos', 'tipos.tipo_id', '=', 'vehiculos.tipo_id')
            ->join('tipo_combustibles', 'tipo_combustibles.tipo_combustible_id', '=', 'vehiculos.tipo_combustible_id')
            ->join('tipo_usos', 'tipo_usos.tipo_uso_id', '=', 'vehiculos.tipo_uso_id')
            ->select('vehiculos.*',
                'clases.clase_id',
                'clases.clase_descripcion',
                'marcas.marca_id',
                'marcas.marca_descripcion',
                'tipos.tipo_id',
                'tipos.tipo_descripcion',
                'tipo_combustibles.tipo_combustible_id',
                'tipo_combustibles.tipo_combustible_descripcion',
                'tipo_usos.tipo_uso_id',
                'tipo_usos.tipo_uso_descripcion')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();
        $datosdocumentospropiedadvehicular = DB::table('vehiculos')
            ->join('documentos_propiedad_vehiculos', 'documentos_propiedad_vehiculos.placa_id', '=', 'vehiculos.placa_id')
            ->select('documentos_propiedad_vehiculos.id',
                'documentos_propiedad_vehiculos.archivo_subido',
                'documentos_propiedad_vehiculos.nombre_documento_propiedad',
                'vehiculos.placa_id')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();
        $datosimagenperfilvehicular = DB::table('vehiculos')
            ->join('imagenes_perfil_vehiculos', 'imagenes_perfil_vehiculos.placa_id', '=', 'vehiculos.placa_id')
            ->select('imagenes_perfil_vehiculos.id',
                'imagenes_perfil_vehiculos.archivo_subido',
                'imagenes_perfil_vehiculos.nombre_imagen_perfil',
                'vehiculos.placa_id')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();
        $datosdocumentosrenovable = DB::table('documentos_ronovable_vehiculos')
            ->select('*')
            ->where('documentos_ronovable_vehiculos.placa_id', '=', $vehiculo)
            ->get();
        $datosseguro = DB::table('seguros')
            ->select('*')
            ->where('seguros.placa_id', '=', $vehiculo)
            ->get();
        $datosclase = Clase::all();
        $datosmarca = Marca::all();
        $datostipo = Tipo::all();
        $datostipo_combustible = TipoCombustible::all();
        $datostipo_uso = TipoUso::all();
        return view('vehiculos.vehiculosview.editvehiculo', compact('datosvehiculo',
            'datosdocumentospropiedadvehicular',
            'datosimagenperfilvehicular',
            'datosdocumentosrenovable',
            'datosseguro',
            'datosclase',
            'datosmarca',
            'datostipo',
            'datostipo_combustible',
            'datostipo_uso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehiculo)
    {
        //
    }

    public function subirArchivo(Request $request)
    {
        return $request;
        /*return view('vehiculos.vehiculosviews.indexvehiculo');*/
    }

}
