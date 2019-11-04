{{--@foreach($datosvehiculo as $filavehiculo)
@endforeach--}}
@extends('layouts.layoutmaster')
@section('title')
    EDITAR Vehiculo
@endsection
@section('styles')
    {{--#################### START CSS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_css')
    {{--#################### END CSS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--##################### START CAROUSEL CSS #####################--}}
    @include('components.links_css_js.carousel.carousel_css')
    {{--##################### END CAROUSEL CSS #####################--}}
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    {{--{{csrf_field()}}--}}
    <input type="text" id="mensaje">
    <div id="mensajejson"></div>

    <div class="block shadow p-2 mb-1 rounded" id="bloque_subida_imagenes_perfil_vehiculo" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">SUBIR IMAGENES (DELANTERA, DERECHA, IZQUIERDA, ATRAS, Y OTROS) DEL VEHICULO</h3>
        </div>
        <div class="block-content block-content-full">
            <h2 class="content-heading border-bottom mb-4 pb-2">Subida de Archivos Asincrona</h2>
            <div class="row">
                <div class="{{--col-lg-8--}} col-lg-12 {{--col-xl-5--}}">
                    <!-- DropzoneJS Container -->
                    {{--<h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>--}}
                    <div id="dropezone">
                        <form method="post" action="{{route('docsrenov.autocomplet')}}" enctype="multipart/form-data"
                              class="dropzone" id="myDropzoneImgsPerfil">
                            @csrf
                            <input type="hidden" name="placa_id" value="2">
                            <div class="dz-message">
                                Sube Tus imagenes aquí
                            </div>
                            <div class="dropzone-previews"></div>
                        </form>
                    </div>
                    <button type="submit" class="btn btn-success" id="btnEnviarSms">GUARDAR</button>
                </div>
            </div>
        </div>
        <div id="enfoque_zona_subir_imgs_perfil_vehiculo"></div>
        {{--<button type="submit" id="limpiar_seccion_dubida_fotos">LIMPIAR</button>--}}
    </div>
    <!-- END Dropzone -->
@endsection
@section('js_script_import')

    {{--############################ START SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_js')
    {{--############################ END SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--###################### START SCRIPT JS CARROUSEL ####################--}}
    @include('components.links_css_js.carousel.carousel_js')
    {{--###################### END SCRIPT JS CARROUSEL ####################--}}
    {{-- ############################################### END SCRIPTS PARA DROPZONE ######################################################--}}
    <!-- Script -->
    <script>
        /*################################################### SCRIPT ################################*/
        /*$('#btnEnviarSms').click(function () {*/
        $(document).on('click','#btnEnviarSms',function () {
            $.ajax({
                /*url: 'perfilfoto' + '?' + $('#avatarForm').serialize(),*/
                url: '{{route('docsrenov.autocomplet')}}',
                type:'POST',
                data:{'name':'roman','javier':'asdasd'},
                /*processData: false,
                contentType: false,*/
                /*dataType: 'json',*/
                success: function (data) {
                    $('#mensajejson').text(data.name);
                    /*$('#mensaje').val(data.toString());*/
                }
            });
        });
        /*############################################## CONTROLADOR ####################################################*/
        'ControladorVehiculo' +
        '                   \DocumentosRonovableVehiculoController@' +
        '                                                       autocompletarDocsRenov'
        public function autocompletarDocsRenov(Request $request)
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
        /*################################################   RUTAS  #####################################################*/
        /*Route::resource('documentosrenovablevehiculo','ControladorVehiculo\DocumentosRenovableVehiculoController');*/
        Route::prefix('/documentosrenovablevehiculo')->group(function(){
            Route::get('/','ControladorVehiculo\DocumentosRenovableVehiculoController@index')->name('documentosrenovablevehiculo.index');
            Route::get('/create','ControladorVehiculo\DocumentosRenovableVehiculoController@create')->name('documentosrenovablevehiculo.create');
            Route::post('/','ControladorVehiculo\DocumentosRonovableVehiculoController@store')->name('documentosrenovablevehiculo.store');
            Route::get('/{documentosrenovablevehiculo_id}','ControladorVehiculo\DocumentosRenovableVehiculoController@show')->name('documentosrenovablevehiculo.show');
            Route::get('/{documentosrenovablevehiculo_id}/edit','ControladorVehiculo\DocumentosRenovableVehiculoController@edit')->name('documentosrenovablevehiculo.edit');
            Route::put('/{documentosrenovablevehiculo_id}','ControladorVehiculo\DocumentosRenovableVehiculoController@update')->name('documentosrenovablevehiculo.update');
            Route::delete('/{documentosrenovablevehiculo_id}','ControladorVehiculo\DocumentosRenovableVehiculoController@destroy')->name('documentosrenovablevehiculo.destroy');

            Route::post('/docsrenovautocomplet','ControladorVehiculo\DocumentosRonovableVehiculoController@autocompletarDocsRenov')->name('docsrenov.autocomplet');
        });
        /*######################################################  VerifYCsrfToken.php ####################################################*/
        protected $except = [
            /*'btnstoreimges',*/
            /*'dropzone/eliminarimagedropzone',*/
            'documentospropiedadvehiculo/storefile',
            'documentospropiedadvehiculo/deletefile',
            'documentosrenovablevehiculo/docsrenovautocomplet',
        ];
    </script>
@endsection
