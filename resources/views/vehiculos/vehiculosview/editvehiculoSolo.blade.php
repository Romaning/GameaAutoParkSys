@foreach($datosvehiculo as $filavehiculo)
@endforeach
@extends('layouts.layoutmaster')
@section('title')
    Registrar Vehiculo
@endsection
@section('styles')
    <!-- Page JS Plugins CSS BE_FORM_PLUGINS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/dropzone/dist/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/flatpickr.min.css')}}">
    <!-- Stylesheets -->
    <!-- Page CSS DIRECTO PARA SHOW VEHICULO -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/themes/material_green.css')}}">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">

@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    <!-- Basic -->
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('vehiculo.updatesolo',$filavehiculo->placa_id)}}" method="POST"
                  enctype="multipart/form-data" {{--onsubmit="return false;"--}} id="form_subir_datos_vehiculo">
                @csrf
                @method('PUT')
                {{--#################################################################--}}
                <div class="col-lg-4">

                </div>
                <div class="row push">
                    <div class="col-lg-8 ">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="placa_id">Placa Vehicular</label>
                                    <input type="text" class="form-control" id="placa_id" name="placa_id"
                                           value="{{$filavehiculo->placa_id}}"
                                           onchange="asignarPlacaIdATodaLaPagina()">
                                </div>
                                <div class="col">
                                    <label for="numero_crpva">RCPVA</label>
                                    <input type="text" class="form-control" id="numero_crpva" name="numero_crpva"
                                           value="{{$filavehiculo->numero_crpva}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="numero_chasis">Numero Chasis</label>
                                    <input type="text" class="form-control" id="numero_chasis" name="numero_chasis"
                                           value="{{$filavehiculo->numero_chasis}}">
                                </div>
                                <div class="col">
                                    <label for="numero_motor">Numero Motor</label>
                                    <input type="text" class="form-control" id="numero_motor" name="numero_motor"
                                           value="{{$filavehiculo->numero_motor}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="documento_importacion">Documento de Importacion</label>
                                    <input type="text" class="form-control" id="documento_importacion"
                                           name="documento_importacion"
                                           value="{{$filavehiculo->documento_importacion}}">
                                </div>
                                <div class="col">
                                    <label for="numero_documento_importacion">Numero Documento de Importacion</label>
                                    <input type="text" class="form-control" id="numero_documento_importacion"
                                           name="numero_documento_importacion"
                                           value="{{$filavehiculo->numero_documento_importacion}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="clase_id">Clase <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control" id="clase_id" name="clase_id"
                                            style="width: 100%;" data-placeholder="Escoger...">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($datosclase as $filaclase)
                                            <option
                                                value="{{$filaclase->clase_id}}" {{$filaclase->clase_id==$filavehiculo->clase_id ? "selected":""}}> {{$filaclase->clase_descripcion}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="marca_id">Marca <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control" id="marca_id" name="marca_id"
                                            style="width: 100%;" data-placeholder="Escoger...">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($datosmarca as $filamarca)
                                            <option
                                                value="{{$filamarca->marca_id}}" {{$filamarca->marca_id==$filavehiculo->marca_id ? "selected":""}}> {{$filamarca->marca_descripcion}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="tipo_id">Tipo <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control" id="tipo_id" name="tipo_id"
                                            style="width: 100%;" data-placeholder="Escoger...">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($datostipo as $filatipo)
                                            <option
                                                value="{{$filatipo->tipo_id}}" {{$filatipo->tipo_id==$filavehiculo->tipo_id ? "selected":""}}> {{$filatipo->tipo_descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="tipo_combustible_id">Tipo Combustible <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control" id="tipo_combustible_id"
                                            name="tipo_combustible_id" style="width: 100%;"
                                            data-placeholder="Escoger...">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($datostipo_combustible as $filatipo_combustible)
                                            <option
                                                value="{{$filatipo_combustible->tipo_combustible_id}}" {{$filatipo_combustible->tipo_combustible_id==$filavehiculo->tipo_combustible_id ? "selected":""}}> {{$filatipo_combustible->tipo_combustible_descripcion}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="color">Color</label>
                                    <input type="text" class="form-control" id="color" name="color"
                                           value="{{$filavehiculo->color}}">
                                </div>
                                <div class="col">
                                    <label for="plazas">Plazas</label>
                                    <input type="text" class="form-control" id="plazas" name="plazas"
                                           value="{{$filavehiculo->plazas}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="ruedas">Ruedas</label>
                                    <input type="text" class="form-control" id="ruedas" name="ruedas"
                                           value="{{$filavehiculo->ruedas}}">
                                </div>
                                <div class="col">
                                    <label for="traccion">Traccion</label>
                                    <input type="text" class="form-control" id="traccion" name="traccion"
                                           value="{{$filavehiculo->traccion}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <h3 class="content-heading border-bottom mb-4 pb-2">DATOS ADICIONALES DEL VEHICULO</h3>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="tipo_uso_id">Tipo de Uso<span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control" id="tipo_uso_id" name="tipo_uso_id"
                                            style="width: 100%;" data-placeholder="Escoger...">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($datostipo_uso as $filatipo_uso)
                                            <option
                                                value="{{$filatipo_uso->tipo_uso_id}}" {{$filatipo_uso->tipo_uso_id == $filavehiculo->tipo_uso_id ? "selected":""}}>
                                                {{$filatipo_uso->tipo_uso_descripcion}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="fecha_incorporacion_institucion">Fecha Incorporacion a la
                                            Institucion</label>
                                        <input type="text" class="js-flatpickr form-control bg-white"
                                               id="fecha_incorporacion_institucion"
                                               name="fecha_incorporacion_institucion" placeholder="Año-mes-dia"
                                               data-date-format="Y-m-d"
                                               value="{{$filavehiculo->fecha_incorporacion_institucion}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<h3 class="content-heading border-bottom mb-4 pb-2">ESTADO ANTERIOR SERVICIO DEL VEHICULO  </h3>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="fecha_inicio_est_serv_vehi">FECHA INICIO: </label>
                                        <input type="text"--}}{{-- name="fecha_inicio" --}}{{-- id="fecha_inicio_est_serv_vehi"
                                               value="{{$estadoservvehi[0]->fecha_inicio}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="form-group">
                                        <label for="estado_service">ESTADO DE SERVICIO: </label>
                                        <input type="text" --}}{{--name="estado_service" --}}{{--id="estado_service"
                                               value="{{$estadoservvehi[0]->est_descripcion}}"
                                               class="form-control btn {{$estadoservvehi[0]->est_descripcion == "EN SERVICIO"? "btn-success":"btn-danger"}}"
                                               style="height: 100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="motivo_est_serv_vehi">MOTIVO: </label>
                                    <input type="text"--}}{{-- name="motivo" --}}{{--id="motivo_est_serv_vehi"
                                           value="{{$estadoservvehi[0]->motivo}}" class="form-control">
                                </div>
                            </div>
                        </div>--}}
                        {{--#########################################################################--}}

                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-success shadow p-2 mb-1 rounded" style="float: right;">
                                    ACTUALIZAR
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div id="mensaje_respuesta_form_subir_datos_vehiculo"></div>
    </div>
    <!-- END Basic -->

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

@endsection

