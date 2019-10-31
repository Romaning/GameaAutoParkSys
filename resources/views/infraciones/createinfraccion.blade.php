@extends('layouts.layoutmaster')
@section('title')

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
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">FORMULARIO</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('infraccion.store')}}" method="POST" enctype="multipart/form-data"
                  id="form_subir_infraccion">
                @csrf
                @method('POST')
                {{-- ############### FORMULARIO EN EL CENTRO ############--}}
                <div class="row push">
                    <div class="col-lg-2">
                    {{--<div class="row">
                        <div class="col" data-toggle="appear" data-class="animated zoomIn">--}}
                    <!-- Team Member -->
                    {{--<div class="block">
                        <div class="block-content">
                            <img src="{{asset('assets/media/avatars/avatar13.jpg')}}" width="100%"
                                 height="100%" id="src_imagen_perfil"
                                 class="justify-content-center">
                        </div>
                    </div>--}}
                    {{--<div class="form-group">
                        <div class="custom-file">
                            <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                            <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                   id="input_imagen_perfil"
                                   name="imagen_perfil">
                            <label class="custom-file-label" for="input_imagen_perfil">Carge Imagen...</label>
                        </div>
                    </div>--}}
                    <!-- END Team Member -->
                        {{--</div>
                    </div>--}}
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-froup">
                                    <label for="placa_id">PLACA: <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control"
                                            id="placa_id"
                                            name="placa_id"
                                            style="width: 100%;"
                                            data-placeholder="Escoger..." required>
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($vehiculos as $filavehiculo)
                                            <option
                                                value="{{$filavehiculo->placa_id}}" > {{$filavehiculo->placa_id}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gestion">GESTION : <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="gestion" id="gestion" pattern="[0-9]+" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_infraccion">FECHA INFRACCION : <span class="text-danger">*</span></label>
                                    <input type="text" class="js-flatpickr form-control bg-white"
                                           id="fecha_infraccion"
                                           name="fecha_infraccion" placeholder="Año-mes-dia"
                                           data-date-format="Y-m-d" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="serie">SERIE : </label>
                                    <input type="text" class="form-control" name="serie" id="serie" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="boleta">BOLETA : </label>
                                    <input type="text" class="form-control" name="boleta" id="boleta" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="condigo">CODIGO : </label>
                                    <input type="text" class="form-control" name="condigo" id="condigo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="descripcion">DESCRIPCIOM : </label>
                                    <input type="text" class="form-control" name="descripcion" id="descripcion">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="monto">MONTO (Bs) : </label>
                                    <input class="form-control" name="monto" id="monto" type="number" step="any">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success shadow">GUARDAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>
                </div>

            </form>
        </div>
    </div>
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
@endsection
