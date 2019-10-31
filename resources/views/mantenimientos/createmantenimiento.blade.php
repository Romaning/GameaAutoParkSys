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
    <!-- Hero -->
    <div class="bg-image" style="background-image: url({{asset('image_proyect/fondo_hero3.jpg')}});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                {{--<div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{asset('')}}" alt=""
                         id="src_imagen_perfil_hero">
                </div>
                <h1 class="h2 text-white mb-0" id=""></h1>
                <span class="text-white-75">
                    Nombre Funcionario
                </span>--}}
            </div>
        </div>
    </div>
    <!-- END Hero -->
    {{--@include('componentes.4_A_Hero(otrabienvenida)')--}}
@endsection
@section('content')
    @if(count($errors) > 0)
        <div class="errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{csrf_field()}}
    <!-- Basic -->

    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">FORMULARIO</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('mantenimiento.store')}}" method="POST" enctype="multipart/form-data"
                  id="form_subir_devolucion">
                @csrf
                @method('POST')
                {{-- ############### FORMULARIO EN EL CENTRO ############--}}
                <div class="row push">
                    <div class="col-lg-2">
                        <p class="font-size-sm text-muted">
                            .
                        </p>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_inicio_mant">FECHA INCIO MANTENIMIENTO: <span class="text-danger">*</span></label>
                                    <input type="text" class="js-flatpickr form-control bg-white"
                                           id="fecha_inicio_mant"
                                           name="fecha_inicio_mant" placeholder="Año-mes-dia"
                                           data-date-format="Y-m-d" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="placa_id_mant">PLACA: <span class="text-danger">*</span></label>
                                    <select class="js-select2 form-control"
                                            id="placa_id_mant" name="placa_id_mant"
                                            style="width: 100%;" data-placeholder="Escoger..." required>
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($datosvehiculo as $datovehiculo)
                                            <option
                                                value="{{$datovehiculo->placa_id}}">{{$datovehiculo->placa_id}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="detalle_mant">DETALLE MANTENIMIENTO: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                           name="detalle_mant"
                                           id="detalle_mant" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipo_mant">TIPO DE MANTENIMIENTO: <span
                                            class="text-danger">*</span></label>
                                    <select class="js-select2 form-control"
                                            id="tipo_mant" name="tipo_mant"
                                            style="width: 100%;" data-placeholder="Escoger..." required>
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        @foreach($tiposMant as $tipoMant)
                                            <option
                                                value="{{$tipoMant->tipo_mantenimiento_descripcion}}">{{$tipoMant->tipo_mantenimiento_descripcion}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="empresa_encargada_mant">EMPRESA ENCARGADA: <span
                                            class="text-danger">*</span>
                                            </label>
                                    <input type="text" class="form-control"
                                           name="empresa_encargada_mant"
                                           id="empresa_encargada_mant" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_fin_mant">FECHA FIN MANTENIMIENTO (opcional al crear): </label>
                                    <input type="text" class="js-flatpickr form-control bg-white"
                                           id="fecha_fin_mant"
                                           name="fecha_fin_mant" placeholder="Año-mes-dia"
                                           data-date-format="Y-m-d">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success shadow p-2 mb-1 rounded"
                                            style="float: right; width: 100%">
                                        GUARDAR
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <p class="font-size-sm text-muted">
                            .
                        </p>
                    </div>
                </div>
            </form>
        </div>
        <div id="mensaje_respuesta_form_subir_devolucion"></div>
    </div>

    <div class="d-none">
        <button type="button" class="js-swal-success btn btn-light push" id="boton_exito">
            <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
        </button>
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
    {{--###################################### time --}}

    {{-- ############################################### END SCRIPTS  ######################################################--}}


    {{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
    {{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ SCRIPT PERSONAL $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
    {{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
    <script>
        /*
        DE: #imagen_perfil A: #src_imagen_perfil_hero  Y A: src_imagen_perfil         HERO
        DE: #ci A: #ci_perfil_hero        					                       HERO CI
        */
        /*##########################################################################################################*/
        /*cunado SE CAMBIE EL INPUT FILE DE IMAGEN_PERFIL PARA LA BD CAMBIA EN DOM EN LOS <IMG SRC=[AquiVaLasIMg] >*/
        $('#input_imagen_perfil').change(function (e) {
            var file = e.target.files[0];
            /*$('#nombre_de_archivo_imagen').val(file.name);*/
            var imageType = 'image.*';
            if (!file.type.match(imageType))
                return;
            $reader = "reader";
            $reader = new FileReader();
            $reader.onload = fileOnload;
            $reader.readAsDataURL(file);
        });

        /*esto de aqui previsulaiza la imagen*/
        function fileOnload(e) {
            var result = e.target.result;
            $('#src_imagen_perfil_hero').attr("src", result);
            $('#src_imagen_perfil').attr("src", result);
        }

        /*##########################################################################################################*/
        function cambioDeNombre() {
            var apellidos = $('#apellidos').val();
            var nombres = $('#nombres').val();
            $('#name_perfil_hero').text(apellidos + " " + nombres);
        }

        /*##########################################################################################################*/
        /*JQUERY PARA ENVIAR FORM DE DATOS VEHICULO*/
        /* $('#form_subir_funcionario').submit(function () {
             $.ajax({
                 method: $(this).attr('method'),
                 url: $(this).attr('action'),
                 data: $(this).serialize(),
                 success: function (data) {
                     $('#boton_exito').click();
                     $('#mensaje_respuesta_form_subir_funcionario').append(
                         "<div class='alert alert-success d-flex align-items-center' role='alert'>" +
                         "<div class='flex-00-auto'>" +
                         "<i class='fa fa-fw fa-check'></i>" +
                         "</div>" +
                         "<div class='flex-fill ml-3'>" +
                         "<p class='mb-0'>" + data + " <a class='alert-link' href='javascript:void(0)'></a>!</p>" +
                         "</div>"
                     );
                 }
             });
             return false;
         });*/

    </script>

    {{--#################################################### JAVA SCRIPT PERSONAL############################################################--}}
    <script type="text/javascript">
        /*COMO AVERIGUAR DONDE EN DONDE ESTA NUESTRO PROYECTO, POR EJEMPLO SI ESTAMOS EN localhost/proyecto3/proyectosLaravel/GAmeaAutoParkSys/public
        *   NOS MUESTRA EL URL POR MAS QUE ESTE EN VARIAS DIRECIONES HASTA PUBLIC*/
        var APP_URL = {!! json_encode(url('/')) !!};
        console.log(APP_URL);
    </script>
    {{--########################################################################################################################################--}}
    <script>
        /* $(function () {
             $(document).on('change', '#input_file_image', function () {
                 $('#label_file_image').text($(this).val());
             });
         });*/
    </script>

    {{--##############################$ PREVISUALIZAR IMAGEN DESDE INPUT FILE, EN ESCUCHA $##############################--}}
    <script>
        /* $('#input_file_image').change(function (e) {
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
         }*/
    </script>
    {{--#################################################################################--}}
    <script>
        function asignarPlacaIdATodaLaPagina() {
            placavehiculo = $('#placa_id').val();

            $('#placa_id_subida_docs_prop_vehiculo').val(placavehiculo);
            $('#placa_id_subida_imgs_perfil_vehiculo').val(placavehiculo);
            $('#placa_id_subida_docs_renov_vehicular').val(placavehiculo);
            $('#placa_id_subir_seguro').val(placavehiculo);
            $('#placa_id_subida_estado_servicio_vehicular').val(placavehiculo);
        }
    </script>

@endsection

