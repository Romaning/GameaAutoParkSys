@extends('layouts.layoutmaster')
@section('title')
    VEHICULOS
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
    <!-- Page JS Plugins CSS DATATABLES-->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
    {{--estilo de la pagina--}}
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @csrf
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="row">
            <div class="col-lg-12">
                <button id="btn_generar_filas" class="btn btn-primary shadow rounded"
                     style="float: right; justify-content: end;">
                    <i class="fas fa-plus-circle"></i>  GENERAR CAMPOS
                </button>
            </div>
        </div>
    </div>

    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div {{--class="block invisible" data-toggle="appear" data-class="animated flipInX"--}}> {{--esta parte hace que la tabal tenga amimacion--}}
        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->


            <form action="{{route('seguro.store')}}" method="POST" id="form_subir_seguros">
                @csrf
                @method('POST')
                <table class="table table-bordered table-striped table-vcenter{{-- js-dataTable-buttons--}}">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">N° PLACA</th>
                        <th class="d-none d-sm-table-cell">GESTION</th>
                        <th class="d-none d-sm-table-cell">DESCRIPCION</th>
                        <th class="d-none d-sm-table-cell">EMPRESA ASEGURADORA</th>
                        <th class="d-none d-sm-table-cell">FECHA DE VIGENCIA</th>
                        <th class="d-none d-sm-table-cell" style="width: 13%;">ARCHIVOS SUBIDOS</th>
                        <th style="width:3%;" class="text-sm-center">
                        </th>
                    </tr>
                    </thead>
                    <tbody id="body_tb_form_in">
                    {{--<tr>
                        <td class="text-center font-size-sm">
                            <select class="js-select2 form-control" id="placa_id" name="placa_id[]"
                                    style="width: 100%;" data-placeholder="Escoger...">
                                <option></option>
                                @foreach($placas as $filaplaca)
                                    <option
                                        value="{{$filaplaca->placa_id}}">{{$filaplaca->placa_id}}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type="text" value="{{date('Y')}}" class="form-control" name="campoa[]">
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type="text" value="" class="form-control" name="campob[]">
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type="text" value="" class="form-control" name="campoc[]">
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type='text' value="" class='js-flatpickr form-control material_green datepickerr'
                                   name='campod[]' placeholder='Año-mes-dia'>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type="file" value="" class="form-control" name="campoe[]">
                        </td>
                        <td class="btn-eliminar justify-content-center">
                            <div class="">
                                <i class='fas fa-trash'></i>
                            </div>
                        </td>
                    </tr>--}}
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary shadow rounded" style="float: right;">ENVIAR
                        </button>
                    </div>
                </div>
            </form>
        </div>
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
    {{-- ################ START SCRIPTS PARA DATATABLESS ###############--}}
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>
    {{--#################### js #################--}}
    <script>
        ///*const placas={{--@json($placas)--}};
        //console.log(placas);*/
        /*for(var placa in placas){
            console.log(placa+" "+placas[placa].placa_id);
        }*/
        ///*"<option value='{{--{{$filaplaca->placa_id}}--}}'>{{--{{$filaplaca->placa_id}}--}}" + "</option>" + */
        var placas =@json($placas);
        var placasimprim = "";
        for (var placa in placas) {
            placasimprim = placasimprim + "<option value='" + placas[placa].placa_id + "'>" + placas[placa].placa_id + "</option>";
        }

        var contador = 0;
        var nuveorequerimiento = $('#body_tb_form_in').html();
        $(document).on('click', '#btn_generar_filas', function () {
            contador = contador + 1;
            $('#body_tb_form_in').append(
                "<tr>" +
                "<td class='text-center font-size-sm'>" +
                "<select class='js-select2 form-control' id='placa_id' name='placa_id[]' style='width: 100%;' placeholder='Escoger...' required>" +
                "<option></option>" +
                placasimprim +
                "</select>" +
                "</td>" +
                "<td class='d-none d-sm-table-cell font-size-sm'>" +
                "<input type='text' value='' class='form-control' name='campoa[]' placeholder='20XX...' required>" +
                "</td>" +
                "<td class='d-none d-sm-table-cell font-size-sm'>" +
                "<input type='text' value='' class='form-control' name='campob[]' required>" +
                " </td>" +
                "<td class='d-none d-sm-table-cell font-size-sm'>" +
                "<input type='text' value='' class='form-control' name='campoc[]' required>" +
                "</td>" +
                " <td class='d-none d-sm-table-cell font-size-sm'>" +
                "<input type='text' value='' class='js-flatpickr form-control material_green datepickerr" + contador + "' name='campod[]' placeholder='Año-mes-dia' required>" +
                "</td>" +
                "<td class='d-none d-sm-table-cell font-size-sm'>" +
                "<div class='col-md-12' style='float: right;'>" +
                "<input type='file' class='custom-file-input' value='' id='archiv' name='campoe[]' required>" +
                "<label class='custom-file-label' for='archiv' id='nfile'></label>" +
                "</div>" +
                "</td>" +
                " <td class='btn-eliminar justify-content-center'>" +
                "<div class=''>" +
                "<i class='fas fa-trash'></i>" +
                "</div>" +
                "</td>" +
                " </tr>"
            );
            $(".datepickerr" + contador).flatpickr();
            $(".datepickerr" + contador).flatpickr("option", "dateFormat", "yy-mm-dd");
        });
        $(document).on('click', '.btn-eliminar', function () {
            $(this).parent().remove();
        })
    </script>
@endsection

