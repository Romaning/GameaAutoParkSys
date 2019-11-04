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

    {{--############################ START SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_js')
    {{--############################ END SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--###################### START SCRIPT JS CARROUSEL ####################--}}
    @include('components.links_css_js.carousel.carousel_js')
    {{--###################### END SCRIPT JS CARROUSEL ####################--}}

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
