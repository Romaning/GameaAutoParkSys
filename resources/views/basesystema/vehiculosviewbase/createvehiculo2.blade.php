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
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">

    <!-- Page CSS DIRECTO PARA SHOW VEHICULO -->
    <link rel="stylesheet" href="{{asset('cssromsys/material_green.css')}}">

@endsection

@section('hero_cuadro_bienvenida')

@endsection

@section('content')
    {{csrf_field()}}

    <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
    <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                SUBIR SEGUROS
                <button id="btn_generar_filas" class="btn btn-primary shadow p-2 mb-1 rounded" style="float: right">
                    GENERAR CAMPOS
                </button>
            </h3>
        </div>
        <div class="block-content">
            <form action="{{route('seguro.store')}}" method="POST">
                @csrf
                <input type="text" name="placa_id" class="d-none" value="" id="placa_id_subir_seguro">
                <div class="row cabecera_tabla_div">
                    <div class="col-lg-1">
                        GESTION
                    </div>
                    <div class="col">
                        DESCRIPCION
                    </div>
                    <div class="col">
                        EMPRESA ASEGURADORA
                    </div>
                    <div class="col">
                        FECHA DE VIGENCIA
                    </div>
                    <div class="col">
                        SUBIR ARCHIVO
                    </div>
                    <div class="col d-none">
                        PLACA ID
                    </div>
                </div>
                <div id="body_tb_insertar_campos">
                    <div class="row">
                        <div class="col-lg-1"><input type="text" value="{{date('Y')}}" class="form-control" name="campoa[]"></div>
                        <div class="col"><input type="text" value="" class="form-control" name="campob[]"></div>
                        <div class="col"><input type="text" value="" class="form-control" name="campoc[]"></div>
                        <div class="col"><input type='text' value="" class='js-flatpickr form-control bg-white material_green datepickerr' name='campod[]' placeholder='Año-mes-dia'></div>
                        <div class="col"><input type="file" value="" class="form-control" name="campoe[]"></div>
                        <div class="btn-eliminar">
                            <i class='fas fa-trash'></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1">.</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" id="btn_enviar_datos " class="btn btn-success shadow p-2 mb-1 rounded" style="float: right">
                                GUARDAR
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- END Flatpickr Datetimepicker -->

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



    {{--##############################################  js  #####################################################--}}
    <script>
        $(function () {
            var nuveorequerimiento = $('#body_tb_insertar_campos').html();
            $(document).on('click', '#btn_generar_filas', function () {
                $('#body_tb_insertar_campos').append(nuveorequerimiento);
                $(".datepickerr").flatpickr();
                $(".datepickerr").flatpickr("option", "dateFormat", "yy-mm-dd");
            });
        });

        $(document).on('click','.btn-eliminar',function () {
            $(this).parent().remove();
        })
    </script>

@endsection
