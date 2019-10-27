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
    <!-- Page JS Plugins CSS DATATABLES-->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
    {{--estilo de la pagina--}}
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')

    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="row">
            <div class="col-lg-12">
                {{--<button id="btn_generar_filas" class="btn btn-primary shadow rounded"
                        style="float: right; justify-content: end;">
                    <i class="fas fa-plus-circle"></i> GENERAR CAMPOS
                </button>--}}
            </div>
        </div>
    </div>

    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div {{--class="block invisible" data-toggle="appear" data-class="animated flipInX"--}}> {{--esta parte hace que la tabal tenga amimacion--}}
            <form action="{{route('seguro.update',$seguro->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <table class="table table-bordered table-striped table-vcenter {{--js-dataTable-buttons--}}">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">N° PLACA</th>
                        <th class="d-none d-sm-table-cell">GESTION</th>
                        <th class="d-none d-sm-table-cell">DESCRIPCION</th>
                        <th class="d-none d-sm-table-cell">EMPRESA ASEGURADORA</th>
                        <th class="d-none d-sm-table-cell">FECHA DE VIGENCIA</th>
                        <th class="d-none d-sm-table-cell" style="width:13%;">ARCHIVOS SUBIDOS</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center font-size-sm">
                            <select class="js-select2 form-control" id="placa_id" name="placa_id"
                                    style="width: 100%;" data-placeholder="Escoger...">
                                <option></option>
                                @foreach($placas as $filaplaca)
                                    <option
                                        value="{{$filaplaca->placa_id}}" {{$filaplaca->placa_id == $seguro->placa_id? "selected":""}}> {{$filaplaca->placa_id}}
                                    </option>
                                @endforeach
                            </select>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type="text" value="{{$seguro->gestion}}" class="form-control" name="campoa">
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type="text" value="{{$seguro->texto}}" class="form-control" name="campob">
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type="text" value="{{$seguro->empresa_aseguradora}}" class="form-control"
                                   name="campoc">
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <input type='text' value="{{$seguro->fecha_vigencia}}"
                                   class='js-flatpickr form-control material_green datepickerr'
                                   name='campod' placeholder='Año-mes-dia'>
                        </td>
                        {{--$$$$$$$$$$$$$$  input files $$$$$$$$$$$$$$--}}
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <div class="col-md-12" style="float: right;">
                                <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                       id="input_file_image" name="campoe">
                                <label class="custom-file-label" for="input_file_image"
                                       id="label_file_image">{{$seguro->archivo_subido}}</label>
                            </div>
                        </td>
                        {{--$$$$$$$$$$$$$$  input files $$$$$$$$$$$$$$--}}
                    </tr>
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

    {{--###########################################$ PREVISULAIZAR IMAGEN DESDE INPUT FILE $#########################################--}}
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <img src="{{asset('carpeta_imagenes/'.$seguro->archivo_subido)}}" width="30%" height="30%" id="images_file"
             class="justify-content-center"
             style="justify-content: center;">
        <div class="row">
            <div class="col-md-6">
                <input type="text" value="{{$seguro->archivo_subido}}" id="nombre_de_archivo_imagen"
                       class="form-control btn btn-info"
                       style="width: 100%">
            </div>
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
    {{--#################################################### JAVA SCRIPT PERSONAL############################################################--}}
    <script type="text/javascript">
        /*COMO AVERIGUAR DONDE EN DONDE ESTA NUESTRO PROYECTO, POR EJEMPLO SI ESTAMOS EN localhost/proyecto3/proyectosLaravel/GAmeaAutoParkSys/public
        *   NOS MUESTRA EL URL POR MAS QUE ESTE EN VARIAS DIRECIONES HASTA PUBLIC*/
        var APP_URL = {!! json_encode(url('/')) !!};
        console.log(APP_URL);
    </script>
    {{--########################################################################################################################################--}}
    <script>
        $(function () {
            $(document).on('change', '#input_file_image', function () {
                $('#label_file_image').text($(this).val());
            });
        });
    </script>

    {{--##############################$ PREVISUALIZAR IMAGEN DESDE INPUT FILE, EN ESCUCHA $##############################--}}
    <script>
        $('#input_file_image').change(function (e) {
            var file = e.target.files[0];

            $('#nombre_de_archivo_imagen').val(file.name);

            var imageType = 'image.*';
            if (!file.type.match(imageType))
                return;
            $reader = "reader";
            $reader = new FileReader();
            $reader.onload = fileOnload;
            $reader.readAsDataURL(file);
        });

        function fileOnload(e) {
            var result = e.target.result;
            $('#images_file').attr("src", result);
        }
    </script>

@endsection

