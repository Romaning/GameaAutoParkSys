{{--@foreach($datosvehiculo as $filavehiculo)
@endforeach--}}
@extends('layouts.layoutmaster')
@section('title')
    EDITAR Vehiculo
@endsection
@section('styles')
    <!-- Page JS Plugins CSS BE_FORM_PLUGINS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/dropzone/dist/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/flatpickr.min.css')}}">
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">
    <!-- Page CSS DIRECTO PARA edit VEHICULO -->

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
                    <button type="submit" class="btn btn-success" id="btnEnviarSms">Guardar</button>
                </div>
            </div>
        </div>
        <div id="enfoque_zona_subir_imgs_perfil_vehiculo"></div>
        {{--<button type="submit" id="limpiar_seccion_dubida_fotos">LIMPIAR</button>--}}
    </div>
    <!-- END Dropzone -->
@endsection
@section('js_script_import')
    {{-- ################ START SCRIPTS PARA LA PAGINA DE VALIDACIONES BE_FORM_PLUGINS ###############--}}
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flatpickr/flatpickr.min.js')}}"></script>
    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>jQuery(function () {
            One.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider']);
        });</script>
    {{--############################################## CARROUSEL #############################################--}}
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/slick-carousel/slick.min.js')}}"></script>
    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function () {
            One.helpers('slick');
        });</script>
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
