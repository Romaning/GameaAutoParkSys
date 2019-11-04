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

    @include('components.alerts.alerttre')
    {{--{{csrf_field()}}--}}
    <input type="text" id="mensaje">
    <div id="mensajejson"></div>

    <div class="block shadow p-2 mb-1 rounded" id="bloque_subida_docs_renov_vehiculo" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">VEHICULO</h3>
        </div>
        <div class="block-content block-content-full">
            <h2 class="content-heading border-bottom mb-4 pb-2">Subida de Archivos Asincrona</h2>
            <div class="row">
                <div class="{{--col-lg-8--}} col-lg-12 {{--col-xl-5--}}">
                    <!-- DropzoneJS Container -->
                    <div id="dropezone_docs_renov_vehiculo">
                        <form method="post" action="{{route('docsrenov.autocomplet')}}" enctype="multipart/form-data" class="dropzone" id="dropZoneDocsRenovVehiParaEditar">
                            @csrf
                            <input type="hidden" name="placa_id" value="2">
                            <div class="dz-message">
                                Sube Tus imagenes aquí
                            </div>
                            <div class="dropzone-previews"></div>
                        </form>
                        <button type="submit" class="btn btn-success" id="btnEnviarSms">GUARDAR</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="enfoque_zona_eliminar_subir_docs_renov_vehiculo"></div>
        {{--<button type="submit" id="limpiar_seccion_dubida_fotos">LIMPIAR</button>--}}
    </div>

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
        /*$('#btnEnviarSms').click(function () {*/
        /*$(document).on('click','#btnEnviarSms',function () {*/
        Dropzone.autoDiscover = false;
        $("#dropZoneDocsRenovVehiParaEditar").dropzone({
            addRemoveLinks: true,
            init: function() {
                myDropzone = this;
                $.ajax({
                    url: '{{route('docsrenov.autocomplet')}}',
                    type: 'POST',
                    data: {'name': 'roman', 'javier': 'asdasd'},
                    success: function (data) {
                        $('#mensajejson').text(data.name+" - "+data.javier);
                        /*$('#mensaje').val(data.toString());*/
                    }
                });
            }
        });
        {{--############################################# CONTROLADOR  ####################################################--}}
            public function autocompletarDocsRenov(Request $request)
        {
            return response()->json($request->all());
        }
        /*################################################   RUTAS  #####################################################*/
        /*Route::resource('documentosrenovablevehiculo','ControladorVehiculo\DocumentosRenovableVehiculoController');*/
        Route::prefix('/documentosrenovablevehiculo')->group(function(){
            Route::post('/docsrenovautocomplet','ControladorVehiculo\DocumentosRonovableVehiculoController@autocompletarDocsRenov')->name('docsrenov.autocomplet');
        });
        /*################################################## DESBLOCK TOKEN#################################################*/
        protected $except = [
            /*'btnstoreimges',*/
            /*'dropzone/eliminarimagedropzone',*/
            'documentospropiedadvehiculo/storefile',
            'documentospropiedadvehiculo/deletefile',
            'documentosrenovablevehiculo/docsrenovautocomplet',
        ];
    </script>


@endsection
