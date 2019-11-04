@extends('layouts.layoutmaster')
@section('title')
    Registrar Vehiculo
@endsection
@section('styles')
    {{--#################### START CSS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_css')
    {{--#################### END CSS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--##################### START CAROUSEL CSS #####################--}}
    @include('components.links_css_js.carousel.carousel_css')
    {{--##################### END CAROUSEL CSS #####################--}}

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
                    <input type="text" value="{{date('Y')}}" class="form-control" name="campoa[]" required pattern="[0-9]+" title="Solo números">
                </td>
                <td>
                    <input type="text" value="" class="form-control" name="campob[]" required>
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
            GUARDAR DATOS
        </button>
    </form>


@endsection

@section('js_script_import')
    {{--############################ START SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_js')
    {{--############################ END SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--###################### START SCRIPT JS CARROUSEL ####################--}}
    @include('components.links_css_js.carousel.carousel_js')
    {{--###################### END SCRIPT JS CARROUSEL ####################--}}

    {{--##############################################  js  #####################################################--}}
    <script src="{{asset('jsromsys/vehiculos.create.js')}}"></script>

@endsection
