<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloVehiculo\ImagenesPerfilVehiculo;
use Illuminate\Http\Request;

class ImagenesPerfilVehiculoController extends Controller
{
    public function storeFileMethodStyde(Request $request)
    {
        /*dd($request->all);*/
        $files = $request->file('file'); /*traemos el array de fotos*/
        $numeroplaca=$request->placa_id;  /*traemos la paca de vehiculo*/
        foreach($files as $file){
            $fileNameOriginal=$file->getClientOriginalName(); /*guardamos el nombre original*/
            $fileNameMorePlaca = $numeroplaca.$fileNameOriginal; /*concatenamos la placa con el nombre original para que no haya duplicidad */
            $path=public_path().'/carpeta_imagenes/'.$fileNameMorePlaca; /*vemos que ese archivo placa+filename coincida la imagen dentro del public*/

            /*guardamos el nombre de archivo y enlazamos a que placa le pertence*/
            $imageUpload = new ImagenesPerfilVehiculo();
            $imageUpload->archivo_subido = $fileNameMorePlaca;  /*2720RKF_fotodelantera.jpg*/
            $imageUpload->nombre_imagen_perfil = $fileNameOriginal; /*fotodelantera.jpg*/
            $imageUpload->placa_id=$numeroplaca; /*2720RKF*/
            $imageUpload->save();

            if (!file_exists($path)) {/*vemos si existe el archivo 2720RKF_fotodelantera.jpg, si entonces solo registramos en la bd ingresa a la bd, sino entonces movemos el archivo*/
                /*return "REPETIDO EL ".$fileNameMorePlaca;*/ /*MANDA MENSAJE DE ARCHIVOS REPETIDOS*/
                $file->move(public_path('carpeta_imagenes'),$fileNameMorePlaca); /*es como hacer #move foto.jpg /public/placa+foto.jpg */
                /*el if si no se mueve el archivo, en el else si se mueve porque no hay en fisico*/
                /*el arhivo original enviado desde form ahora se movera dentro de nuestra carpeta public con otro nombre*/
            }
        }
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModeloVehiculo\ImagenesPerfilVehiculo  $imagenesPerfilVehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(ImagenesPerfilVehiculo $imagenesPerfilVehiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModeloVehiculo\ImagenesPerfilVehiculo  $imagenesPerfilVehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(ImagenesPerfilVehiculo $imagenesPerfilVehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModeloVehiculo\ImagenesPerfilVehiculo  $imagenesPerfilVehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImagenesPerfilVehiculo $imagenesPerfilVehiculo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModeloVehiculo\ImagenesPerfilVehiculo  $imagenesPerfilVehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagenesPerfilVehiculo $imagenesPerfilVehiculo)
    {
        //
    }
}
