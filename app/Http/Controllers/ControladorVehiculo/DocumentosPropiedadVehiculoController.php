<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloVehiculo\DocumentosPropiedadVehiculo;
use Illuminate\Http\Request;

class DocumentosPropiedadVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function storeFileMethodStyde(Request $request)
    {
        $filesa = $request->file('file'); /*traemos el array de fotos*/
        $numeroplaca=$request->placa_id;  /*traemos la paca de vehiculo*/
        if(is_array($filesa)) {
            foreach ((array)$filesa as $file) {
                $fileNameOriginal = $file->getClientOriginalName(); /*guardamos el nombre original*/
                $fileNameMorePlaca = $numeroplaca . $fileNameOriginal; /*concatenamos la placa con el nombre original para que no haya duplicidad */
                $path = public_path() . '/carpeta_imagenes/' . $fileNameMorePlaca; /*vemos que ese archivo placa+filename coincida la imagen dentro del public*/
                if (file_exists($path)) {/*vemos si existe el archivo 2720RKF_fotodelantera.jpg, si entonces no ingresa a la bd, sino entonces entra*/
                    /*return "REPETIDO EL ".$fileNameMorePlaca;*/ /*MANDA MENSAJE DE ARCHIVOS REPETIDOS*/
                } else {
                    /*el arhivo original enviado desde form ahora se movera dentro de nuestra carpeta public con otro nombre*/
                    $file->move(public_path('carpeta_imagenes'), $fileNameMorePlaca); /*es como hacer #move foto.jpg /public/placa+foto.jpg */
                    /*guardamos el nombre de archivo y enlazamos a que placa le pertence*/
                    $imageUpload = new DocumentosPropiedadVehiculo();
                    $imageUpload->archivo_subido = $fileNameMorePlaca;  /*2720RKF_fotodelantera.jpg*/
                    $imageUpload->nombre_documento_propiedad = $fileNameOriginal; /*fotodelantera.jpg*/
                    $imageUpload->placa_id = $numeroplaca; /*2720RKF*/
                    $imageUpload->save();
                }
            }
        }else{
            return "LO SIENTO, NO ES ARRAY";
        }
    }

    public function fileDestroyMethodStyde(Request $request)
    {
        //
    }

    public function storeFile(Request $request)
    {
        $image = $request->file('file');
        $numeroplaca=$request->placa;
        $imageName = $numeroplaca.$image->getClientOriginalName();
        $imageNombreReal=$image->getClientOriginalName();
        /*$registros = count(DocumentosPropiedadVehiculo::where('archivo_subido',$imageName)->get());*/
        $path=public_path().'/carpeta_imagenes/'.$imageName;
        if (file_exists($path)) {
            return "YA VLAE";
        }
        else{
            $image->move(public_path('carpeta_imagenes'),$imageName);
            $imageUpload = new DocumentosPropiedadVehiculo();
            $imageUpload->archivo_subido = $imageName;
            $imageUpload->nombre_documento_propiedad = $imageNombreReal;
            $imageUpload->placa_id=$numeroplaca;
            $imageUpload->save();
            return response()->json(['success'=>$imageName]);
        }

    }
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        DocumentosPropiedadVehiculo::where('archivo_subido',$filename)->delete();
        $path=public_path().'/carpeta_imagenes/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModeloVehiculo\DocumentosPropiedadVehiculo  $documentosPropiedadVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(DocumentosPropiedadVehiculo $documentosPropiedadVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModeloVehiculo\DocumentosPropiedadVehiculo  $documentosPropiedadVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(DocumentosPropiedadVehiculo $documentosPropiedadVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModeloVehiculo\DocumentosPropiedadVehiculo  $documentosPropiedadVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DocumentosPropiedadVehiculo $documentosPropiedadVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModeloVehiculo\DocumentosPropiedadVehiculo  $documentosPropiedadVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DocumentosPropiedadVehiculo $documentosPropiedadVehiculo)
    {
        //
    }
}
