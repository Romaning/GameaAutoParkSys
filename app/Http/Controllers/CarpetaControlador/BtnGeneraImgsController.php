<?php

namespace App\Http\Controllers\CarpetaControlador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class BtnGeneraImgsController extends Controller
{
    public function index(){
        /*return view('uploadimg.btnenviarimg1');*/
        return view('basesystema.uploadimg.btngeneraimgs');
    }
    public function storeimg1(Request $request){
        $imagen = $request ->file('imagen_file_id');
        $nuevo_nombre=$imagen->getClientOriginalExtension();
        $imagen->move(public_path('carpeta_imagenes'),$nuevo_nombre);

        return response()->json([
            'mensaje_de_servidor_codigo' => '<img src="/carpeta_imagenes/'.$nuevo_nombre.'" class="img-thumbnail" width="300" />',
            'mensaje_serv_clase_css'   => 'alert-succes',
            'mensaje_serv_texto'   => 'exito'
        ]);
        /*return response('bien'); activar en el caso de $.ajax({method: "POST",url: "{{route('storeimg1.store')}}",
                data: { name: "John", location: "Boston" }
                }).done(function( msg ) {alert( "Data Saved: " + msg );});*/

    }
    public function storeImagesUECam(Request $request)
    {
        /*Hacemos una validacion de entrada de solo imagen*/
       /* $this->validate($request, [
            'imagen' => 'required|image',
        ]);*/
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nameImg = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nameImg);
        }
        /*$datos = new FotosUECamara();
        $datos->titulofoto = $request->titulofoto;
        $datos->imagen = $nameImg;
        $datos->perspectiva = $request->perspectiva;
        $datos->idUEC = $request->idUEC;
        $datos->save();*/
        $respues = $request->titulofoto.' '.$nameImg.' '.$request->perspectiva;
        return response($respues);
    }

    public function subirArchivo(Request $request){
        return $request;
        /*return view('vehiculos.vehiculosviews.indexvehiculo');*/
    }

    public function subirArchivoPdf(Request $request){
        $request->file('archivo')->store('public');
        dd("subido y guardado");
    }

    public function updatePhoto(Request $request)
    {
        /*Hacemos una validacion de entrada de solo imagen*/
        $this->validate($request, [
            'photo' => 'required|image',
        ]);
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');/*captura la variable enviada desde el layoutScripts*/
            $nameImg = time() . $file->getClientOriginalName();/*para evitar confusion y choque de fotos con nombres iguales*/
            /*$nameImg=$file->getClientOriginalName();*/ /*si se quiere mantener el nombre orginal de l foto*/
            $file->move(public_path() . '/images/', $nameImg); /*movemos la imagen a la carpeta public/images/xxxxx.jpg*/
        }
        /*$file = $request->file('photo');*/ /*captura la variable enviada desde el layoutScripts*/
        /*$path = public_path('images/users/'.$fileName);*/ /*otra forma de mover la imagen al directorio public/images*/
        /*Image::make($file)->fit(144, 144)->save($path);*/ /*existe una extension de mover imagen y es esta*/
        return $nameImg;
    }


}
