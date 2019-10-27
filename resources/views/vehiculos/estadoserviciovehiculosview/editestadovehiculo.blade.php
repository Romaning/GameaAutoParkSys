@foreach($datosestservvehi as $datosestservve)
@endforeach
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
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">

    <!-- Page CS DIRECTO PARA SHOW VEHICULO -->
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')

    <div class="block shadow p-2 mb-1 rounded " data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">EDITAR ESTADO DE SERVICIO DEL VEHICULO</h3>
        </div>
        <div class="block-content">
            <form action="{{route('estservvehi.update', $datosestservve->est_serv_vehiculo_id)}}" method="POST"
                  enctype="multipart/form-data" id="form_subir_estado_servicio_vehicular">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col col-md-2">
                        <div class="form-group">
                            <label for="placa_id">PLACA:<span class="text-danger">*</span></label>
                            <input type="text" name="placa_id" id="placa_id" value="{{$datosestservve->placa_id}}"
                                   class="form-control" required>
                        </div>
                    </div>
                    <div class="col col-md-3 text-sm-center">
                        <div class="form-group">
                            <label for="fecha_inicio">DESDE LA FECHA:<span class="text-danger">*</span></label>
                            <input type="text" class="js-flatpickr form-control bg-white"
                                   id="fecha_inicio"
                                   name="fecha_inicio" placeholder="Año-mes-dia"
                                   data-date-format="Y-m-d"
                                   value="{{$datosestservve->fecha_inicio}}" required>
                        </div>
                    </div>
                    <div class="col col-md-2">
                        <div class="form-group">
                            <label>SERVICIO:</label>
                            <div class="custom-control custom-switch custom-control-lg mb-2">
                                <label>OFF</label>
                                <input type="checkbox" class="custom-control-input" id="est_id" name="est_id" value="
                                @if($datosestado[0]->est_descripcion == "EN SERVICIO")
                                {{$datosestado[0]->est_id}}
                                @else
                                @if($datosestado[1]->est_descripcion == "EN SERVICIO")
                                {{$datosestado[1]->est_id}}
                                @endif
                                @endif"
                                    {{$datosestservve->est_descripcion== "EN SERVICIO"? "checked":""}}>
                                <label class="custom-control-label" for="est_id">ON</label>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-5">
                        <div class="form-group">
                            <label for="motivo">MOTIVO: <span class="text-danger">*</span></label>
                            <input type="text" name="motivo" class="form-control" value="{{$datosestservve->motivo}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success shadow p-2 mb-1 rounded" style="float: right"
                                    id="guardar_estado_servicio_vehiculo">
                                ACTUALIZAR ESTADO
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="mensaje_respuesta_form_subir_est_serv_vehicular"></div>
    </div>
    <!-- END Flatpickr Datetimepicker -->


    {{--###############################################################################################--}}
    <div class="d-none">
        <button type="button" class="js-swal-success btn btn-light push" id="boton_exito">
            <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
        </button>
    </div>
@endsection
@section('js_script_import')
    {{-- ################ START SCRIPTS PARA LA PAGINA DE VALIDACIONES BE_FORM_PLUGINS ###############--}}
    <!-- Page JS Plugins -->
    <script
        src="{{asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script
        src="{{asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
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

    {{--############################################## JS #############################################--}}
    <script>
        /*JQUERY PARA ENVIAR FORM ESTADO SERVICIO DE VEHICULO*/
        $('#form_subir_estado_servicio_vehicular').submit(function () {
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    $('#boton_exito').click();
                    $('#mensaje_respuesta_form_subir_est_serv_vehicular').append(
                        "<div class='alert alert-success d-flex align-items-center' role='alert'>"+
                        "<div class='flex-00-auto'>"+
                        "<i class='fa fa-fw fa-check'></i>"+
                        "</div>"+
                        "<div class='flex-fill ml-3'>"+
                        "<p class='mb-0'>"+data+" <a class='alert-link' href='javascript:void(0)'></a>!</p>"+
                        "</div>"
                    );
                }
            });
            return false;
        });
    </script>
@endsection



