@foreach($datosAsignaciones as $filaasignacion)
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
    <!-- Page CSS DIRECTO PARA SHOW VEHICULO -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/themes/material_green.css')}}">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/slick-carousel/slick-theme.css')}}">

    <link rel="stylesheet"
          href="{{asset('assets/js/plugins/magnific-popup/magnific-popup.css')}}">{{--para ver imagen perfil en tipo modal--}}

@endsection
@section('hero_cuadro_bienvenida')
    <!-- Hero -->
    <div class="bg-image"
         style="background-image: url({{asset('carpeta_imagenes/'.$imagenesPerfilVehiculo[0]->archivo_subido.'')}});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                {{--<div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{asset('')}}" alt=""
                         id="src_imagen_perfil_hero">
                </div>--}}
                <h1 class="h2 text-white mb-0" id="">ASIGNACION</h1>
                {{--<span class="text-white-75">
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
            <form action="{{route('asignacion.store')}}" method="POST" enctype="multipart/form-data"
                  id="form_subir_funcionario">
                @csrf
                @method('POST')
                {{--############### FORMULARIO EN EL CENTRO ############--}}
                <div class="row push">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col" data-toggle="appear" data-class="animated zoomIn">
                                <!-- Team Member -->
                                <div class="block">
                                    <div class="block-content">
                                        <img
                                            src="{{asset('/imagenes_store/funcionarios/'.$filaasignacion->ci."/".$filaasignacion->imagen_perfil)}}"
                                            width="100%"
                                            height="100%" id=""
                                            class="justify-content-center">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                               id=""
                                               name="">
                                        <label class="custom-file-label"
                                               style="width: 100%; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"
                                               for=""> {{$filaasignacion->imagen_perfil}}</label>
                                    </div>
                                </div>
                                <!-- END Team Member -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="ci">CI FUNCIONARIO: <span class="text-danger">*</span></label>
                                    <input type="text" id="ci"
                                           class="form-control btn-warning shadow"
                                           value="{{$filaasignacion->ci}}">
                                    {{--<select class="js-select2 form-control" id="ci" name="ci"
                                            style="width: 100%;" data-placeholder="Escoger...">
                                        <option></option>
                                        @foreach($funcionariosCi_NoEstanEnAsignaciones as $filaci)
                                            <option
                                                value="{{$filaci->ci}}">{{$filaci->ci}}</option>
                                        @endforeach
                                    </select>--}}
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="boton_ir_funcionario">.</label>
                                    <a href="{{route('funcionario.show',$filaasignacion->ci)}}"
                                       class="btn-warning form-control shadow">
                                        <i class="fa fa-caret-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="placa_id">PLACA: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control btn-success shadow"
                                           value="{{$filaasignacion->placa_id}}">
                                    {{--<select class="js-select2 form-control" id="placa_id" name="placa_id"
                                            style="width: 100%;" data-placeholder="Escoger...">
                                        <option></option>
                                        @foreach($vehiculosPlacas_NoEstanEnAsignaciones as $filavehiculo)
                                            <option
                                                value="{{$filavehiculo->placa_id}}">{{$filavehiculo->placa_id}}</option>
                                        @endforeach
                                    </select>--}}
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="">.</label>
                                    <a href="{{route('vehiculo.show',$filaasignacion->placa_id)}}"
                                       class="btn-success form-control shadow">
                                        <i class="fa fa-caret-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fecha_asignacion">FECHA ASIGNACION: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="js-flatpickr form-control bg-white"
                                           id="fecha_asignacion"
                                           name="fecha_asignacion" placeholder="Año-mes-dia"
                                           value="{{$filaasignacion->fecha_asignacion}}"
                                           data-date-format="Y-m-d">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="identificador_memorandum">IDENTIFICADOR MEMORANDUM: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                           name="identificador_memorandum"
                                           value="{{$filaasignacion->identificador_memorandum}}"
                                           id="identificador_memorandum"
                                           pattern="[A-Za-z0-9]+">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipo_conductor_chofer">TIPO ASIGNACION: <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                           name="tipo_conductor_chofer"
                                           value="{{$filaasignacion->tipo_conductor_chofer}}"
                                           id="tipo_conductor_chofer"
                                           pattern="[A-Za-z0-9]+">
                                    {{--<select class="js-select2 form-control"
                                            id="tipo_conductor_chofer" name="tipo_conductor_chofer"
                                            style="width: 100%;" data-placeholder="Escoger...">
                                        <option></option>
                                        @foreach($datosTipoCC as $filaTipoCC)
                                            <option
                                                value="{{$filaTipoCC->tipo_c_c_descripcion}}">{{$filaTipoCC->tipo_c_c_descripcion}}</option>
                                        @endforeach
                                    </select>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="n1">NOMBRE DE FUNCIONARIO</label>
                                    <input type="text" class="form-control"
                                           value="{{$filaasignacion->apellidos}} {{$filaasignacion->nombres}}" id="n1">
                                </div>
                            </div>
                        </div>
                        categoria_licencia
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="n2">CAT. LICENCIA</label>
                                    <input type="text" class="form-control"
                                           value="{{$filaasignacion->categoria_licencia}}" id="n2">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="n3">NOMBRE DEPARTAMENTO FUNCIONARIO </label>
                                        <input type="text" class="form-control"
                                               value="{{$filaasignacion->departamento_nombre}}" id="n3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col" data-toggle="appear" data-class="animated zoomIn">
                                <!-- Team Member -->
                                <div class="block">
                                    <div class="block-content">
                                        <div class="js-gallery img-fluid-100 img-link-zoom-in">
                                            <a href="{{asset('imagenes_store/asignaciones/'.$filaasignacion->archivo_memorandum)}}" class="img-link-zoom-in img-thumb img-lightbox justify-content-center">
                                                <img class="justify-content-center img-link-zoom-in img-fluid"
                                                     src="{{asset('imagenes_store/asignaciones/'.$filaasignacion->archivo_memorandum)}}"
                                                     width="100%"
                                                     height="100%" id="src_imagen_perfil"
                                                >
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-file">
                                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                               id=""
                                               name="">
                                        <label class="custom-file-label"
                                               style="width: 100%; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"
                                               for=""> {{$filaasignacion->imagen_perfil}}</label>
                                    </div>
                                </div>
                                <!-- END Team Member -->
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="row">
                    <div class="col-lg-8"></div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success shadow p-2 mb-1 rounded"
                                    style="float: right; width: 100%">
                                GUARDAR
                            </button>
                        </div>
                    </div>
                </div>--}}
            </form>
        </div>
        <div id="mensaje_respuesta_form_subir_funcionario"></div>
    </div>

    {{--SLIDER DE IMAGENES DE DOCUEMENTOS DE PROPIEDAD SEGUN PLACA ID--}}
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                <i class="fa fa-play fa-fw text-primary"></i>
                IMAGENES PERFIL VEHICULAR
                <div class="btn btn-success">{{--{{$fila['placa']}}--}}</div>
                {{--<a href="{{route('imgsperfil.editsolo', $filaimagenperfil->)}}" class="btn btn-warning" style="float: right;">EDITAR</a>--}}
            </h3>
        </div>
        <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true"
             data-slides-to-show="3" data-center-mode="true" data-autoplay="true" data-autoplay-speed="3000">
            @foreach($imagenesPerfilVehiculo as $filaimagenperfil)
                <div class="{{--row items-push--}} js-gallery img-fluid-100">
                    {{--<div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">--}}
                    <a class="img-link img-link-zoom-in img-thumb img-lightbox"
                       href="{{asset('carpeta_imagenes/'.$filaimagenperfil->archivo_subido.'')}}">
                        <img class="img-fluid"
                             src="{{asset('carpeta_imagenes/'.$filaimagenperfil->archivo_subido.'')}}">
                    </a>
                    {{--</div>--}}
                </div>
            @endforeach
        </div>
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
    {{--##############################################  FOTOS PREVISUALIZAR EDIT VIEW #######################################--}}
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Page JS Helpers (Magnific Popup Plugin) -->
    <script>jQuery(function () {
            One.helpers('magnific-popup');
        });</script>

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

