@foreach($datosvehiculo as $filavehiculo)
@endforeach
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
    <!-- Page JS DIRECTO PARA SHOW VEHICULO -->
    <style>
        .cajita {
            width: 100%;
            height: 100%;
            background-color: red;
        }
    </style>
@endsection
@section('hero_cuadro_bienvenida')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    FORM VER DATOS HISTORIAL DE VEHICULO CON PLACA
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        Datos Vehiculo {{$filavehiculo->placa_id}}
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Form</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Formulario de datos</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    {{--@include('componentes.4_A_Hero(otrabienvenida)')--}}
@endsection
@section('content')
    {{csrf_field()}}
    <!-- Basic -->
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            {{--<form action="#" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                @csrf--}}
            <div class="row push">

                <div class="col-lg-8 ">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="placa_id">Placa Vehicular</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="placa_id"
                                       name="placa_id" value="{{$filavehiculo->placa_id}}">
                            </div>
                            <div class="col">
                                <label for="numero_crpva">RCPVA</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="numero_crpva"
                                       name="numero_crpva" value="{{$filavehiculo->numero_crpva}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="numero_chasis">Numero Chasis</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="numero_chasis"
                                       name="numero_chasis" value="{{$filavehiculo->numero_chasis}}">
                            </div>
                            <div class="col">
                                <label for=numero_motor">Numero Motor</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="numero_motor"
                                       name="numero_motor" value="{{$filavehiculo->numero_motor}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=documento_importacion">Documento de Importacion</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded "
                                       id="documento_importacion" name="documento_importacion"
                                       value="{{$filavehiculo->documento_importacion}}">
                            </div>
                            <div class="col">
                                <label for=numero_documento_importacion">Numero Documento de Importacion</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded "
                                       id="numero_documento_importacion" name="numero_documento_importacion"
                                       value="{{$filavehiculo->numero_documento_importacion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="clase_id">Clase <span class="text-danger">*</span></label>
                                <input type="text" class=" form-control shadow p-2 mb-1 rounded " id="clase_id"
                                       name="clase_id" style="width: 100%;"
                                       value="{{$filavehiculo->clase_descripcion}}">
                            </div>
                            <div class="col">
                                <label for=marca_id">Marca <span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="marca_id"
                                       name="marca_id" style="width: 100%;"
                                       value="{{$filavehiculo->marca_descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="tipo_id">Tipo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="tipo_id"
                                       name="tipo_id" style="width: 100%;" value="{{$filavehiculo->tipo_descripcion}}">
                            </div>
                            <div class="col">
                                <label for=tipo_combustible_id">Tipo Combustible <span
                                        class="text-danger">*</span></label>
                                <input class="form-control shadow p-2 mb-1 rounded " id="tipo_combustible_id"
                                       name="tipo_combustible_id" style="width: 100%;"
                                       value="{{$filavehiculo->tipo_combustible_descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=color">Color</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="color" name="color"
                                       value="{{$filavehiculo->color}}">
                            </div>
                            <div class="col">
                                <label for=plazas">Plazas</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="plazas"
                                       name="plazas" value="{{$filavehiculo->plazas}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=ruedas">Ruedas</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="ruedas"
                                       name="ruedas" value="{{$filavehiculo->ruedas}}">
                            </div>
                            <div class="col">
                                <label for=traccion">Traccion</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="traccion"
                                       name="traccion" value="{{$filavehiculo->traccion}}">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        ---------------------------------------------------------------------------------------
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="estado_servicio">Estado Servicio<span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="estado_servicio"
                                       name="estado_servicio" style="width: 100%;"
                                       value="{{$filavehiculo->estado_servicio}}">
                            </div>
                            <div class="col">
                                <label for=tipo_uso_id">Tipo de Uso<span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="tipo_uso_id"
                                       name="tipo_uso_id" style="width: 100%;"
                                       value="{{$filavehiculo->tipo_uso_descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" id="btn_insertar_documentos_vehiculo">
                                    INSERTAR DOCUMENTOS
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <!-- Tiles Slider 3 -->
                    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-inbox fa-5x text-success"></i>
                                <div class="font-size-h3 font-w600 mt-3">12</div>
                                <div class="text-muted">New messages</div>
                            </div>
                        </div>
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-file-alt fa-5x text-warning"></i>
                                <div class="font-size-h3 font-w600 mt-3">12</div>
                                <div class="text-muted">Files</div>
                            </div>
                        </div>
                        <div class="block text-center bg-white mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-server fa-5x text-danger"></i>
                                <div class="font-size-h3 font-w600 mt-3">26</div>
                                <div class="text-muted">Websites</div>
                            </div>
                        </div>
                    </div>
                    <!-- END Tiles Slider 3 -->

                    <!-- Tiles Slider 3 -->
                    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-inbox fa-5x text-success"></i>
                                <div class="font-size-h3 font-w600 mt-3">12</div>
                                <div class="text-muted">New messages</div>
                            </div>
                        </div>
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-file-alt fa-5x text-warning"></i>
                                <div class="font-size-h3 font-w600 mt-3">12</div>
                                <div class="text-muted">Files</div>
                            </div>
                        </div>
                        <div class="block text-center bg-white mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-server fa-5x text-danger"></i>
                                <div class="font-size-h3 font-w600 mt-3">26</div>
                                <div class="text-muted">Websites</div>
                            </div>
                        </div>
                    </div>
                    <!-- END Tiles Slider 3 -->

                    <!-- Tiles Slider 3 -->
                    <div class="js-slider slick-nav-hover" data-dots="true" data-autoplay="true" data-arrows="true">
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-inbox fa-5x text-success"></i>
                                <div class="font-size-h3 font-w600 mt-3">12</div>
                                <div class="text-muted">New messages</div>
                            </div>
                        </div>
                        <div class="block text-center mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-file-alt fa-5x text-warning"></i>
                                <div class="font-size-h3 font-w600 mt-3">12</div>
                                <div class="text-muted">Files</div>
                            </div>
                        </div>
                        <div class="block text-center bg-white mb-0">
                            <div class="block-content py-5">
                                <i class="fa fa-server fa-5x text-danger"></i>
                                <div class="font-size-h3 font-w600 mt-3">26</div>
                                <div class="text-muted">Websites</div>
                            </div>
                        </div>
                    </div>
                    <!-- END Tiles Slider 3 -->

                </div>
            </div>
        </div>
    </div>
    <!-- END Basic -->

    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
    <div class="block d-none shadow p-2 mb-1 rounded" id="bloque_subida_archivo" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">Subir Archivos</h3>
        </div>
        <div class="block-content block-content-full">
            <h2 class="content-heading border-bottom mb-4 pb-2">Subida de Archivos Asincrona</h2>
            <div class="row">
                <div class="{{--col-lg-8--}} col-lg-12 {{--col-xl-5--}}">
                    <!-- DropzoneJS Container -->
                    {{--<h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>--}}
                    <div id="dropezone">
                        <form method="post" action="{{route('docsprop.storefile')}}" enctype="multipart/form-data"
                              class="dropzone" id="my-dropzone">
                            @csrf
                            <input type="hidden" name="placa" value="{{$filavehiculo->placa_id}}">
                            <div class="dz-message">
                                Sube Tus imagenes aquí
                            </div>
                            <div class="dropzone-previews"></div>
                            <button type="submit" class="btn btn-success" id="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="enfoque_zona_subir_docs_prop"></div>
        {{--<button type="submit" id="limpiar_seccion_dubida_fotos">LIMPIAR</button>--}}
    </div>
    <!-- END Dropzone -->

    <!-- Slider with multiple images and center mode -->
    <div class="block shadow p-2 mb-1 rounded" id="bloque_documentos_archivo" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                <i class="fa fa-play fa-fw text-primary"></i> Imagenes del Vehiculo
            </h3>
        </div>
        <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true"
             data-slides-to-show="3" data-center-mode="true" data-autoplay="true" data-autoplay-speed="3000">
            <div>
                <img class="img-fluid" src="{{asset('carpeta_imagenes/2710rkfadelante.jpg')}}" alt="">
            </div>
            <div>
                <img class="img-fluid" src="{{asset('carpeta_imagenes/2710rkfderecha.jpg')}}" alt="">
            </div>
            <div>
                <img class="img-fluid" src="{{asset('carpeta_imagenes/2710rkfizquierda.jpg')}}" alt="">
            </div>
            <div>
                <img class="img-fluid" src="{{asset('carpeta_imagenes/2710rkfatras2.jpg')}}" alt="">
            </div>
            {{--<div>
                <img class="img-fluid" src="{{asset('assets/media/photos/photo19@2x.jpg')}}" alt="">
            </div>--}}
        </div>
    </div>
    <!-- END Slider with multiple images and center mode -->

@endsection
@section('js_script_import')

    {{--############################ START SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_js')
    {{--############################ END SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--###################### START SCRIPT JS CARROUSEL ####################--}}
    @include('components.links_css_js.carousel.carousel_js')
    {{--###################### END SCRIPT JS CARROUSEL ####################--}}

    {{-- ############################################### END SCRIPTS PARA DROPZONE ######################################################--}}
    <script>
        placavehiculo = $('#placa_id').val();
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 50,
            maxFiles: 20,
            acceptedFiles: ".jpeg,.jpg,.png,.gif.pdf",
            addRemoveLinks: true,
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success",
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>

    {{-- ############################################### START Aparecer Seccion Subida Img & desaparecer Slider ######################################################--}}
    <script>
        var interuptor_tbn_subir_archivos = 0;
        $(document).on('click', '#btn_insertar_documentos_vehiculo', function () {
            if (interuptor_tbn_subir_archivos == 0) {
                $('#bloque_subida_archivo').removeClass('d-none'); /*hacer que aparezca la seccion de subir archivos*/
                $('#bloque_documentos_archivo').addClass('d-none') /*hacer que desaparezca el carrusel de imagenes*/
                $('html, body').animate({
                    scrollTop: $("#enfoque_zona_subir_docs_prop").offset().top
                }, 20);
                interuptor_tbn_subir_archivos = 1;
            } else {
                $('#bloque_subida_archivo').addClass('d-none');  /*hacer que ahora se cierre la seccion de subir archivos*/
                $('#bloque_documentos_archivo').removeClass('d-none') /*hacer que aparezca el carrusel de imagenes*/
                interuptor_tbn_subir_archivos = 0;
            }
        });

    </script>
@endsection



