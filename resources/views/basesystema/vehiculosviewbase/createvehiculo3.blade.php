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

    <button id="btn_generar_filas" class="btn btn-primary">
        GENERAR CAMPOS
    </button>
    <form action="" method="POST">
        <table id="tabla_insertar_campos">
            <thead>
            <tr>
                <th>gestion</th>
                <th>texto</th>
                <th>empresa_aseguradora</th>
                <th>fecha_vigencia</th>
                <th>archivo_subido
                <th>placa_id</th>
            </tr>
            </thead>
            <tbody id="body_tb_insertar_campos">
            <tr>
                <td>
                    <input type="text" value="{{date('Y')}}" class="form-control" name="campoa[]">
                </td>
                <td>
                    <input type="text" value="" class="form-control" name="campob[]">
                </td>
                <td>
                    <input type="text" value="" class="form-control" name="campoc[]">
                </td>
                <td>
                    <input type='text' value="" class='js-flatpickr form-control bg-white material_green datepickerr'
                           name='campod[]' placeholder='Año-mes-dia'>
                </td>
                <td>
                    <input type="file" value="" class="form-control" name="campoe[]">
                </td>
                <td>
                    <input type="text" value="2911PHC" class="form-control placa_id_subir_seguro" name="campof[]">
                </td>
            </tr>
            </tbody>
        </table>
        <button id="btn_enviar_datos">
            ENVIAR DATOS
        </button>
    </form>


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
    <script src="{{asset('jsromsys/vehiculos.create.js')}}"></script>

@endsection
