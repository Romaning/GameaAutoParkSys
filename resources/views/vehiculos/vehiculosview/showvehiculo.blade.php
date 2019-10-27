@foreach($datosvehiculo as $filavehiculo)
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
    <!-- Basic -->
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            {{--<form action="{{route('vehiculo.store')}}" method="POST"
                  enctype="multipart/form-data" --}}{{--onsubmit="return false;"--}}{{-- id="form_subir_datos_vehiculo">
                @csrf--}}
            <div class="row push">
                <div class="col-md-8  shadow p-2 mb-1 rounded">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="placa_id">PLACA: </label>
                                <input type="text" class="form-control btn-success" id="placa_id"
                                       name="placa_id" value="{{$filavehiculo->placa_id}}">
                            </div>
                            <div class="col">
                                <label for="numero_crpva">RCPVA: </label>
                                <input type="text" class="form-control " id="numero_crpva"
                                       name="numero_crpva" value="{{$filavehiculo->numero_crpva}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="numero_chasis">NUMERO CHASIS: </label>
                                <input type="text" class="form-control" id="numero_chasis"
                                       name="numero_chasis" value="{{$filavehiculo->numero_chasis}}">
                            </div>
                            <div class="col">
                                <label for=numero_motor">NUMERO MOTOR:</label>
                                <input type="text" class="form-control" id="numero_motor"
                                       name="numero_motor" value="{{$filavehiculo->numero_motor}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=documento_importacion">DOCUMENTO DE IMPORTACION: </label>
                                <input type="text" class="form-control"
                                       id="documento_importacion" name="documento_importacion"
                                       value="{{$filavehiculo->documento_importacion}}">
                            </div>
                            <div class="col">
                                <label for=numero_documento_importacion">NUMERO DOCUMENTO DE IMPORTACION: </label>
                                <input type="text" class="form-control"
                                       id="numero_documento_importacion" name="numero_documento_importacion"
                                       value="{{$filavehiculo->numero_documento_importacion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="clase_id">CLASE: </label>
                                <input type="text" class=" form-control" id="clase_id"
                                       name="clase_id" style="width: 100%;"
                                       value="{{$filavehiculo->clase_descripcion}}">
                            </div>
                            <div class="col">
                                <label for=marca_id">MARCA: </label>
                                <input type="text" class="form-control" id="marca_id"
                                       name="marca_id" style="width: 100%;"
                                       value="{{$filavehiculo->marca_descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="tipo_id">TIPO: </label>
                                <input type="text" class="form-control" id="tipo_id"
                                       name="tipo_id" style="width: 100%;" value="{{$filavehiculo->tipo_descripcion}}">
                            </div>
                            <div class="col">
                                <label for=tipo_combustible_id">TIPO COMBUSTIBLE: </label>
                                <input class="form-control" id="tipo_combustible_id"
                                       name="tipo_combustible_id" style="width: 100%;"
                                       value="{{$filavehiculo->tipo_combustible_descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=color">COLOR: </label>
                                <input type="text" class="form-control" id="color" name="color"
                                       value="{{$filavehiculo->color}}">
                            </div>
                            <div class="col">
                                <label for=plazas">PLAZAS: </label>
                                <input type="text" class="form-control" id="plazas"
                                       name="plazas" value="{{$filavehiculo->plazas}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=ruedas">RUEDAS: </label>
                                <input type="text" class="form-control" id="ruedas"
                                       name="ruedas" value="{{$filavehiculo->ruedas}}">
                            </div>
                            <div class="col">
                                <label for=traccion">TRACCION: </label>
                                <input type="text" class="form-control" id="traccion"
                                       name="traccion" value="{{$filavehiculo->traccion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        {{--<h3 class="content-heading border-bottom mb-4 pb-2">DATOS ADICIONALES DEL VEHICULO</h3>--}}
                    </div>

                    <div class="form-group">
                        <div class="row">
                            {{--<div class="col">
                                <label for="estado_servicio">Estado Servicio<span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="estado_servicio"
                                       name="estado_servicio" style="width: 100%;"
                                       value="{{$filavehiculo->estado_servicio}}">
                            </div>--}}
                            <div class="col">
                                <label for=tipo_uso_id">TIPO USO: </label>
                                <input type="text" class="form-control" id="tipo_uso_id"
                                       name="tipo_uso_id" style="width: 100%;"
                                       value="{{$filavehiculo->tipo_uso_descripcion}}">
                            </div>
                            <div class="col">
                                <label for=fecha_incorporacion_institucion">FECHA DE INCORPORACION A
                                    INSTITUCION: </label>
                                <input type="text" class="form-control" id="fecha_incorporacion_institucion"
                                       name="fecha_incorporacion_institucion" style="width: 100%;"
                                       value="{{$filavehiculo->fecha_incorporacion_institucion}}">
                            </div>
                        </div>

                    </div>
                    {{--######################################editar vehiculo ####################################--}}
                    {{--<div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" style="float:right;">
                                    <a href="{{route('vehiculo.editsolo', $filavehiculo->placa_id)}}"
                                       class="btn btn-warning shadow p-2 mb-1 rounded" data-toggle="appear"
                                       data-class="animated bounceIn"> EDITAR </a>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    {{--#########################################################################################--}}

                    {{--<h3 class="content-heading border-bottom mb-4 pb-2">ESTADO SERVICIO DE VEHICULO</h3>--}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="fecha_inicio_est_serv_vehi">DESDE LA FECHA: </label>
                                    <input type="text" name="fecha_inicio" id="fecha_inicio_est_serv_vehi"
                                           value="{{$estadoservvehi[0]->fecha_inicio}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="form-group">
                                    <label for="estado_service">ESTADO DE SERVICIO: </label>
                                    <input type="text" name="estado_service" id="estado_service"
                                           value="{{$estadoservvehi[0]->est_descripcion}}"
                                           class="form-control btn {{$estadoservvehi[0]->est_descripcion == "EN SERVICIO"? "btn-success":"btn-danger"}}"
                                           style="height: 100%;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="motivo">MOTIVO: </label>
                                <input type="text" name="motivo" id="motivo_est_serv_vehi"
                                       value="{{$estadoservvehi[0]->motivo}}" class="form-control">
                            </div>
                        </div>
                    </div>

                    {{--######################################editar vehiculo ####################################--}}
                    {{--<div class="form-group">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group" style="float:right;">
                                    <a href="{{route('estservvehi.registrarsolo', $filavehiculo->placa_id)}}"
                                       class="btn btn-warning shadow p-2 mb-1 rounded"> EDITAR </a>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                    {{--#########################################################################################--}}
                </div>
                {{--#################################################################--}}
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


    {{--SLIDER DE IMAGENES DE DOCUEMENTOS DE PROPIEDAD SEGUN PLACA ID--}}
    <!-- Slider with multiple images and center mode -->
    <div class="block shadow p-2 mb-1 rounded" id="bloque_docs_prop_vehiculo" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                <i class="fa fa-play fa-fw text-primary"></i>
                DOCUMENTOS DE PROPIEDAD VEHICULAR
                <button type="submit" class="btn btn-primary shadow p-2 mb-1 rounded"
                        id="btn_insertar_documentos_propiedad_vehiculo" style="float:right;">
                    INSERTAR
                </button>
               {{-- <a href="{{route('documentospropiedadvehiculo.editsolo', $filavehiculo->placa_id)}}"
                   class="btn btn-warning shadow p-2 mb-1 rounded" style="float:right;">EDITAR</a>--}}
            </h3>
        </div>
        <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true"
             data-slides-to-show="3" data-center-mode="true" data-autoplay="true" data-autoplay-speed="3000">
            @foreach($datosdocumentospropiedadvehicular as $filadocpropvehi)
                <div>
                    <img class="img-fluid" src="{{asset('carpeta_imagenes/'.$filadocpropvehi->archivo_subido.'')}}">
                </div>
            @endforeach
            {{--<img class="img-fluid" src="{{asset('assets/media/photos/photo19@2x.jpg')}}" alt="">--}}
        </div>
    </div>
    <!-- END Slider with multiple images and center mode -->


    {{--SECCION DE SUBIDA DE IMAGENES DE DOCUMENTOS DE PROPIEDAD DEL VEHICULO (TODOS LOS PERFILES O ANGULOS)--}}
    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
    <div class="block d-none shadow p-2 mb-1 rounded" id="bloque_subida_docs_prop_vehiculo" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                SUBIR DOCUMENTOS DE PROPIEDAD VEHICULAR
            </h3>
        </div>
        <div class="block-content block-content-full">
            <h2 class="content-heading border-bottom mb-4 pb-2">Subida de Archivos Asincrona</h2>
            <div class="row">
                <div class="{{--col-lg-8--}} col-lg-12 {{--col-xl-5--}}">
                    <!-- DropzoneJS Container -->
                    {{--<h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>--}}
                    <div id="dropezone_docs_prop">
                        <form method="post" action="{{route('docsprop.storefilemet')}}" enctype="multipart/form-data"
                              class="dropzone" id="myDropzoneDocsProp">
                            @csrf
                            <input type="hidden" name="placa_id" value="{{$filavehiculo->placa_id}}"
                                   id="placa_id_subida_docs_prop_vehiculo"> {{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ placa oculta $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
                            <div class="dz-message">
                                Sube Tus imagenes aquí
                            </div>
                            <div class="dropzone-previews"></div>
                        </form>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success shadow p-2 mb-1 rounded"
                                        id="submit_docs_prop_vehiculo" style="float:right;">
                                    GUARDAR
                                </button>
                                <button type="submit" class="btn btn-danger shadow p-2 mb-1 rounded"
                                        id="btn_insertar_documentos_propiedad_vehiculo" style="float:right;">
                                    CANCELAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="enfoque_zona_subir_docs_prop_vehiculo"></div>
        {{--<button type="submit" id="limpiar_seccion_dubida_fotos">LIMPIAR</button>--}}
    </div>
    <!-- END Dropzone -->

    {{--####################################### SLIDER PARA IMAGENES PERFIL VEHICULO #######################################--}}
    <!-- Slider with multiple images and center mode -->
    <div class="block shadow p-2 mb-1 rounded" id="bloque_imgenes_perfil_vehiculo" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                <i class="fa fa-play fa-fw text-primary"></i>
                IMAGENES DE PERFIL DE VEHICULO
                <button type="submit" class="btn btn-primary shadow p-2 mb-1 rounded"
                        id="btn_insertar_imagenes_perfil_vehiculo" style="float: right;">
                    INSERTAR
                </button>
                {{--<a href="{{route('imgsperfil.editsolo', $filavehiculo->placa_id)}}"
                   class="btn btn-warning shadow p-2 mb-1 rounded" style="float:right;">EDITAR</a>--}}
            </h3>
        </div>
        <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true"
             data-slides-to-show="3" data-center-mode="true" data-autoplay="true" data-autoplay-speed="3000">
            {{--<img class="img-fluid" src="{{asset('assets/media/photos/photo19@2x.jpg')}}" alt="">--}}
            @foreach($datosimagenperfilvehicular as $fileimgperfil)
                <div>
                    <img class="img-fluid" src="{{asset('carpeta_imagenes/'.$fileimgperfil->archivo_subido.'' )}}">
                </div>
            @endforeach
        </div>
    </div>
    <!-- END Slider with multiple images and center mode -->



    {{--SECCION DE SUBIDA DE IMAGENES DEL VEHICULO (TODOS LOS PERFILES O ANGULOS)--}}
    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
    <div class="block shadow p-2 mb-1 rounded d-none" id="bloque_subida_imagenes_perfil_vehiculo" data-toggle="appear"
         data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">SUBIR IMAGENES (DELANTERA, DERECHA, IZQUIERDA, ATRAS, Y OTROS) DEL VEHICULO</h3>
        </div>
        <div class="block-content block-content-full">
            <h2 class="content-heading border-bottom mb-4 pb-2">SUBIDA DE ARCHIVOS ASINCRONA</h2>
            <div class="row">
                <div class="{{--col-lg-8--}} col-lg-12 {{--col-xl-5--}}">
                    <!-- DropzoneJS Container -->
                    {{--<h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>--}}
                    <div id="dropezone">
                        <form method="post" action="{{route('imgsperfil.storefilemet')}}" enctype="multipart/form-data"
                              class="dropzone" id="myDropzoneImgsPerfil">
                            @csrf
                            <input type="hidden" name="placa_id" value="{{$filavehiculo->placa_id}}"
                                   id="placa_id_subida_imgs_perfil_vehiculo">{{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ placa oculta $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
                            <div class="dz-message">
                                Sube Tus imagenes aquí
                            </div>
                            <div class="dropzone-previews"></div>
                        </form>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-success shadow p-2 mb-1 rounded"
                                        id="submit_imgs_perfil_vehiculo" style="float: right;">
                                    GUARDAR
                                </button>
                                <button type="submit" class="btn btn-danger shadow p-2 mb-1 rounded"
                                        id="btn_insertar_imagenes_perfil_vehiculo" style="float: right;">
                                    CANCELAR
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="enfoque_zona_subir_imgs_perfil_vehiculo"></div>
        {{--<button type="submit" id="limpiar_seccion_dubida_fotos">LIMPIAR</button>--}}
    </div>
    <!-- END Dropzone -->




    <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
    <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">SUBIR DOCUMENTOS RENOVABLES DEL VEHICULO</h3>
            <a href="{{route('docsrenov.historial.placa', $filavehiculo->placa_id)}}" class="btn btn-info">HISTORIAL</a>
        </div>
        <div class="block-content">

            @foreach($datosdocumentosrenovable as $filadocrenov)
                {{-- <form action="{{route('documentosrenovablevehiculo.store')}}" method="POST"
                       id="form_subir_docs_renov_vehicular">
                     @csrf--}}
                <input type="hidden" name="placa_id" value="{{$filavehiculo->placa_id}}" id="placa_id_subida_docs_renov_vehicular">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="gestion_var_front">GESTION</label>
                            <input type="text" value="{{ $filadocrenov->gestion}}" name="gestion"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-flatpickr-custom">FECHA FIN COBERTURA DE SOAT</label>
                            <input type="text" class="js-flatpickr form-control bg-white"
                                   id="fecha_fin_cobertura_soat"
                                   name="fecha_fin_cobertura_soat" placeholder="Año-mes-dia"
                                   data-date-format="Y-m-d" value="{{$filadocrenov->fecha_fin_cobertura_soat}}">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>B-SISA</label>
                            <div class="custom-control custom-switch custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-lg1"
                                       name="bsisa" value="1" @if($filadocrenov->bsisa == "1") checked @endif>
                                <label class="custom-control-label"
                                       for="example-sw-custom-lg1">{{$filadocrenov->bsisa == "1"? "SI":"NO"}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>INSPECCION VEHICULAR</label>
                            <div class="custom-control custom-switch custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-lg2"
                                       name="inspeccion_vehicular"
                                       value="1" @if($filadocrenov->inspeccion_vehicular == "1") checked @endif>
                                <label class="custom-control-label" for="example-sw-custom-lg2">SI</label>
                            </div>
                        </div>
                    </div>

                   {{-- <div class="col-md-1">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-control-lg mb-2">
                                <a href="{{route('docsrenov.edit',$filadocrenov->archivero_id)}}"
                                   class="btn btn-warning btn-sm" data-toggle="tooltip"
                                   title="EDITAR">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                        </div>
                    </div>--}}

                </div>
            @endforeach

            {{--<div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success shadow p-2 mb-1 rounded"
                                style="float: right">
                            GUARDAR
                        </button>
                    </div>
                </div>
            </div>--}}
            {{--</form>--}}
        </div>
        <div id="mensaje_respuesta_form_subir_docs_renov_vehicular"></div>
    </div>
    <!-- END Flatpickr Datetimepicker -->



    <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
    <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                SEGUROS
            </h3>
            <a href="{{route('seguro.historial.placa', $filavehiculo->placa_id)}}" class="btn btn-info">HISTORIAL</a>
        </div>
        <div class="block-content">
            <input type="text" name="placa_id" class="d-none" value="{{$filavehiculo->placa_id}}" id="placa_id_subir_seguro">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                <tr>
                    <th class="d-none d-sm-table-cell">GESTION</th>
                    <th class="d-none d-sm-table-cell">DESCRIPCION</th>
                    <th class="d-none d-sm-table-cell">EMPRESA ASEGURADORA</th>
                    <th class="d-none d-sm-table-cell">FECHA DE VIGENCIA</th>
                    <th class="d-none d-sm-table-cell" style="width:13%;">ARCHIVOS SUBIDOS</th>
                    <th style="width:3%;" class="text-sm-center">
                    </th>
                </tr>
                </thead>
                <tbody id="body_tb_form_in">

                @foreach($datosseguro as $seguro)

                    <tr>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$seguro->gestion}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$seguro->texto}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$seguro->empresa_aseguradora}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$seguro->fecha_vigencia}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <div class="col-md-12" style="float: right;">
                                <input type="file" class="custom-file-input" value="" id="archiv" name="campoe">
                                <label class="custom-file-label" for="archiv"
                                       id="nfile">{{$seguro->archivo_subido}}</label>
                            </div>
                        </td>
                        {{--<td class="btn-eliminar justify-content-center">
                            <div class="mb-2">
                                <a href="{{route('seguro.edit', $seguro->id)}}"
                                   class="btn btn-warning btn-sm" data-toggle="tooltip"
                                   title="EDITAR">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="col-lg-1">.</div>
        </div>
        <div id="mensaje_respuesta_form_subir_seguros"></div>
    </div>
    <!-- END Flatpickr Datetimepicker -->


    <div class="d-none">
        <button type="button" class="js-swal-success btn btn-light push" id="boton_exito">
            <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
        </button>
    </div>
@endsection

@section('footer')
    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
        <a href="{{route('vehiculo.showedit', $filavehiculo->placa_id)}}" class="btn btn-warning shadow p-2 mb-4 rounded"
           style="float: right">
            EDITAR POR SECCIONES
        </a>
    </div>
    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">

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
    {{--
        <script src="{{asset('jsromsys/vehiculos.show.js')}}"></script>
    --}}
    {{-- ############################################### END SCRIPTS PARA DROPZONE ######################################################--}}
    <script>
        placavehiculo = $('#placa_id').val();

        function asignarPlacaIdATodaLaPagina() {
            placavehiculo = $('#placa_id').val();

            $('#placa_id_subida_docs_prop_vehiculo').val(placavehiculo);
            $('#placa_id_subida_imgs_perfil_vehiculo').val(placavehiculo);
            $('#placa_id_subida_docs_renov_vehicular').val(placavehiculo);
            $('#placa_id_subir_seguro').val(placavehiculo);
            $('#placa_id_subida_estado_servicio_vehicular').val(placavehiculo);
        }

        /*JQUERY PARA ENVIAR FORM DE DATOS VEHICULO*/
        $('#form_subir_datos_vehiculo').submit(function () {
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    $('#boton_exito').click();
                    $('#mensaje_respuesta_form_subir_datos_vehiculo').append(
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
        /*para subir documentos de vehiculo*/
        Dropzone.options.myDropzoneDocsProp = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 500,
            maxFiles: 200,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
            addRemoveLinks: true,
            init: function () {
                var submitBtn = document.getElementById("submit_docs_prop_vehiculo");
                myDropzoneDocsProp = this;
                submitBtn.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzoneDocsProp.processQueue();
                });
                this.on("addedfile", function (file) {
                    $('#boton_exito').click();
                    /*alert("file uploaded");*/
                });

                this.on("complete", function (file) {
                    myDropzoneDocsProp.removeFile(file);
                });

                this.on("success",
                    myDropzoneDocsProp.processQueue.bind(myDropzoneDocsProp)
                );
            }
        };

        /*para subir imagenes de perfil de vehiculo*/
        Dropzone.options.myDropzoneImgsPerfil = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 500,
            maxFiles: 200,
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
            addRemoveLinks: true,
            init: function () {
                var submitBtn = document.getElementById("submit_imgs_perfil_vehiculo");
                myDropzoneImgsPerfil = this;

                submitBtn.addEventListener("click", function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzoneImgsPerfil.processQueue();
                });
                this.on("addedfile", function (file) {
                    $('#boton_exito').click();
                    /*alert("file uploaded");*/
                });

                this.on("complete", function (file) {
                    myDropzoneImgsPerfil.removeFile(file);
                });

                this.on("success",
                    myDropzoneImgsPerfil.processQueue.bind(myDropzoneImgsPerfil)
                );
            }
        };
        /*JQUERY PARA ENVIAR FORM DE DOCUEMENTOS RENOVABLES*/
        $('#form_subir_docs_renov_vehicular').submit(function () {
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    $('#boton_exito').click();
                    $('#mensaje_respuesta_form_subir_docs_renov_vehicular').append(
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
        /*JQUERY PARA ENVIAR FORM DE SUBIR SEGUROS DE VEHICULO*/
        /*$('#form_subir_seguros').submit(function () {
            var campoa = $('#form_subir_seguros').find('input[name^="campoa"]').serialize();
            var campob = $('#form_subir_seguros').find('input[name^="campob"]').serialize();
            var campoc = $('#form_subir_seguros').find('input[name^="campoc"]').serialize();
            var campod = $('#form_subir_seguros').find('input[name^="campod"]').serialize();
            var campoe = $('#form_subir_seguros').find('input[name^="campoe"]').serialize();
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: {
                    campoa:campoa,
                    campob:campob,
                    campoc:campoc,
                    campod:campod,
                    campoe:campoe,
                },
                success : function (data) {
                    $('#mensaje_respuesta_form_subir_seguros').html(data);
                }
            });
            return false;
        });*/
        /*$('#form_subir_seguros').submit(function () {
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serializeArray(),
                success : function (data) {
                    $('#mensaje_respuesta_form_subir_seguros').html(data);
                }
            });
            return false;
        });*/

        /*Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#myDropzone", {
            url: "",
            maxFileSize: 50,
            addRemoveLinks: true,
            //more dropzone options here
        });

        //Add existing files into dropzone
        var existingFiles = [
            { name: "2710rkfadelante.jpg", size: 12345678 },
            { name: "Filename 4.pdf", size: 12345678 },
            { name: "Filename 5.pdf", size: 12345678 }

        ];
        for (i = 0; i < existingFiles.length; i++) {
            myDropzone.emit("addedfile", existingFiles[i]);
            //myDropzone.emit("thumbnail", existingFiles[i], "/image/url");
            myDropzone.emit("complete", existingFiles[i]);
        }*/

    </script>

    {{-- ############################################### START Aparecer Seccion Subida Img & desaparecer Slider ######################################################--}}
    <script>
        /**/
        var interuptor_tbn_documentos_propiedad_vehiculo = 0;
        $(document).on('click', '#btn_insertar_documentos_propiedad_vehiculo', function () {
            if (interuptor_tbn_documentos_propiedad_vehiculo == 0) {
                $('#bloque_subida_docs_prop_vehiculo').removeClass('d-none'); /*hacer que aparezca la seccion de subir archivos*/
                $('#bloque_docs_prop_vehiculo').addClass('d-none') /*hacer que desaparezca el carrusel de imagenes*/
                /*$('html, body').animate({
                    scrollTop: $("#enfoque_zona_subir_docs_prop_vehiculo").offset().top
                }, 20);*/
                interuptor_tbn_documentos_propiedad_vehiculo = 1;
            } else {
                $('#bloque_subida_docs_prop_vehiculo').addClass('d-none');  /*hacer que ahora se cierre la seccion de subir archivos*/
                $('#bloque_docs_prop_vehiculo').removeClass('d-none');/*hacer que aparezca el carrusel de imagenes*/
                /*location.reload();*//*recargamos la imagen*/
                interuptor_tbn_documentos_propiedad_vehiculo = 0;
            }
        });

        var interuptor_tbn_imagenes_perfil_vehiculo = 0;
        $(document).on('click', '#btn_insertar_imagenes_perfil_vehiculo', function () {
            if (interuptor_tbn_imagenes_perfil_vehiculo == 0) {
                $('#bloque_subida_imagenes_perfil_vehiculo').removeClass('d-none'); /*hacer que aparezca la seccion de subir archivos*/
                $('#bloque_imgenes_perfil_vehiculo').addClass('d-none') /*hacer que desaparezca el carrusel de imagenes*/
                /*$('html, body').animate({
                    scrollTop: $("#enfoque_zona_subir_imgs_perfil_vehiculo").offset().top
                }, 20);*/
                interuptor_tbn_imagenes_perfil_vehiculo = 1;
            } else {
                $('#bloque_subida_imagenes_perfil_vehiculo').addClass('d-none');  /*hacer que ahora se cierre la seccion de subir archivos*/
                $('#bloque_imgenes_perfil_vehiculo').removeClass('d-none'); /*hacer que aparezca el carrusel de imagenes*/
                /*location.reload();*//*recargamos la imagen*/
                interuptor_tbn_imagenes_perfil_vehiculo = 0;
            }
        });

    </script>

@endsection