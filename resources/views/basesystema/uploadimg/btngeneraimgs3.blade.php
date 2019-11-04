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

    <!-- Page JS DIRECTO PARA SHOW VEHICULO -->
    <style>
        .cajita{
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
    <div class="block shadow p-2 mb-1 rounded">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            {{--<form action="#" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                @csrf--}}
            <div class="row push">
                <div class="col-lg-4">
                    {{--<p class="font-size-sm text-muted">
                        DOCUMENTOS VEHICULO
                    </p>--}}
                    <div class="cajita shadow p-2 mb-1 rounded">
                        <p class="font-size-sm text-muted">
                            DOCUMENTOS VEHICULO
                        </p>
                    </div>

                </div>
                <div class="col-lg-8 ">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="placa_id">Placa Vehicular</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="placa_id" name="placa_id" value="{{$filavehiculo->placa_id}}">
                            </div>
                            <div class="col">
                                <label for="numero_crpva">RCPVA</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="numero_crpva" name="numero_crpva" value="{{$filavehiculo->numero_crpva}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="numero_chasis">Numero Chasis</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="numero_chasis" name="numero_chasis" value="{{$filavehiculo->numero_chasis}}">
                            </div>
                            <div class="col">
                                <label for=numero_motor">Numero Motor</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="numero_motor" name="numero_motor" value="{{$filavehiculo->numero_motor}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=documento_importacion">Documento de Importacion</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="documento_importacion" name="documento_importacion" value="{{$filavehiculo->documento_importacion}}">
                            </div>
                            <div class="col">
                                <label for=numero_documento_importacion">Numero Documento de Importacion</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="numero_documento_importacion" name="numero_documento_importacion" value="{{$filavehiculo->numero_documento_importacion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="clase_id">Clase <span class="text-danger">*</span></label>
                                <input type="text" class=" form-control shadow p-2 mb-1 rounded " id="clase_id" name="clase_id" style="width: 100%;" value="{{$filavehiculo->clase_descripcion}}">
                            </div>
                            <div class="col">
                                <label for=marca_id">Marca <span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="marca_id" name="marca_id" style="width: 100%;" value="{{$filavehiculo->marca_descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="tipo_id">Tipo <span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="tipo_id" name="tipo_id" style="width: 100%;" value="{{$filavehiculo->tipo_descripcion}}">
                            </div>
                            <div class="col">
                                <label for=tipo_combustible_id">Tipo Combustible <span class="text-danger">*</span></label>
                                <input class="form-control shadow p-2 mb-1 rounded " id="tipo_combustible_id" name="tipo_combustible_id" style="width: 100%;" value="{{$filavehiculo->tipo_combustible_descripcion}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=color">Color</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="color" name="color" value="{{$filavehiculo->color}}">
                            </div>
                            <div class="col">
                                <label for=plazas">Plazas</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="plazas" name="plazas" value="{{$filavehiculo->plazas}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for=ruedas">Ruedas</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="ruedas" name="ruedas" value="{{$filavehiculo->ruedas}}">
                            </div>
                            <div class="col">
                                <label for=traccion">Traccion</label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="traccion" name="traccion" value="{{$filavehiculo->traccion}}">
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
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="estado_servicio" name="estado_servicio" style="width: 100%;" value="{{$filavehiculo->estado_servicio}}">
                            </div>
                            <div class="col">
                                <label for=tipo_uso_id">Tipo de Uso<span class="text-danger">*</span></label>
                                <input type="text" class="form-control shadow p-2 mb-1 rounded " id="tipo_uso_id" name="tipo_uso_id" style="width: 100%;" value="{{$filavehiculo->tipo_uso_descripcion}}">
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
                        {{--################################### START GENERAR BOTONES ##########################################--}}

                    <div class="row">
                        {{--TABLA DE IMAGENES A INSERTAR--}}
                        <div class="form-group">
                            <button type="button" id="btngenerabotonesinputfile" class="btn btn-primary" style="margin-bottom: 10px;"
                                    data-toggle="tooltip"
                                    title="CLICK PARA INSERTAR IMAGEN O VARIAS IMAGENES">
                                {{--ACCIONA EL BOTON--}}
                                AGREGAR FOTOS
                            </button>
                        </div>
                        <div class="">
                            {{--<form id="imgformcamue" enctype="multipart/form-data" class="col-md-7">--}}
                            <table id="tablefotoscamue" class="table table-hover" style="font-size: small;">
                                <thead class="table-dark">
                                <tr>
                                    <td>TITULO</td>
                                    <td>IMAGEN</td>
                                    <td>PERSEPECTIVA DE VISION</td>
                                </tr>
                                </thead>
                                <tbody>
                                {{--aqui se van a concatenar las filas donde estaran las imagenes--}}
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td></td>
                                </tr>
                                </tfoot>
                            </table>

                            {{--</form>--}}
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" id="btnaccionguardarfotosuecam">
                        GUARDAR FOTOS
                    </button>

                        {{--################################### END GENERAR BOTONES ##########################################--}}
                </div>
            </div>
            {{--</form>--}}
        </div>
    </div>
    <!-- END Basic -->


    <form method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="archivo"><b>Archivo: </b></label><br>
        <input type="file" name="archivo" required>
        <input class="btn btn-success" type="submit" value="GUARDAR" >
    </form>


    <!-- Dropzone (functionality is auto initialized by the plugin itself in js/plugins/dropzone/dropzone.min.js) -->
    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Subir Archivos</h3>
        </div>
        <div class="block-content block-content-full">
            <h2 class="content-heading border-bottom mb-4 pb-2">Subida de Archivos Asincrona</h2>
            <div class="row">
                {{--<div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Drag and drop sections for your file uploads
                    </p>
                </div>--}}
                <div class="{{--col-lg-8--}} col-lg-12 {{--col-xl-5--}}">
                    <!-- DropzoneJS Container -->
                    <form class="dropzone" action="{{route('vehiculo.subirarchivo')}}">
                        @csrf
                        @method('post')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dropzone -->
@endsection
@section('js_script_import')
    {{--############################ START SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_js')
    {{--############################ END SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}


    <script>

        $(document).on('click', '#btn_insertar_documentos_vehiculo', function () {
            alert('HOLA MUNDO');
        });

        /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
        /*HACER CREADOR DE BOTONES, CLICK EN BOTON PARA GENERAR VARIOS BOTONES*/
        var contfotoueadd = 0;
        var itemsfotoeliminado=[];
        $(document).on('click', '#btngenerabotonesinputfile', function () {
            $valcontfoto = contaridfoto();
            $('#tablefotoscamue').append(
                "<tr id='idrowfue"+$valcontfoto + "'>" +
                "<td>" +
                "<input type='text' id='iditemtitulofoto"+$valcontfoto+"'" +
                "name='itemtitulofoto' class='form-control' required>" +
                "</td>" +
                "<td>" +
                "<input type='file' id='iditemfotocam"+$valcontfoto+"'" +
                "name='itemfotocam' class='form-control' onclick='previsimage("+$valcontfoto+")' style='font-size: small;' required>" +
                /*"<div id='dividviewitemfotocam" + $valcontfoto + "' runat='server'></div>" +*//*"<br>"+*/
                "<img id='idviewitemfotocam"+$valcontfoto+"' style='max-width:200px;' src=''>" +
                "</td>" +
                "<td>" +
                "<input type='text' id='iditemperspectivafoto"+$valcontfoto+"'" +
                "name='itemperspectivafoto' class='form-control' required>" +
                "</td>" +
                "<td>" +
                "<a href='#' onclick='eliminaritemfoto("+$valcontfoto+")'><i class='fas fa-trash'></i></a>" +
                /*se crea un pequqño div para que se vea un mensaje de exito*/
                "<div id='fotoinsertdcorrect"+$valcontfoto+"'></div>" +
                "</td>" +
                "</tr>"
            );
        });

        function contaridfoto() {
            contfotoueadd = contfotoueadd + 1;
            return contfotoueadd;
        }

        function descontaridfoto() {
            contfotoueadd = contfotoueadd - 1;
            return contfotoueadd;
        }

        /*ELIMNAR FOTO SELECIONADO DE TABLA DE IMAGENES*/
        function eliminaritemfoto(val) {
            $('#idrowfue' + val).remove();
            descontaridfoto();
        }

        /*PREVISUALIZACIO DE IMAGENES POR CADA BOTON GENERADO EN DOM*/
        function previsimage(value) {
            $iditemfotocam = '#' + 'iditemfotocam' + value;
            $($iditemfotocam).change(function (e) {
                var file = e.target.files[0];
                var imageType = 'image.*';
                if (!file.type.match(imageType))
                    return;
                $reader = "reader" + value;
                $reader = new FileReader();
                $reader.onload = fileOnload;
                $reader.readAsDataURL(file);
            });

            function fileOnload(e) {
                var result = e.target.result;
                $divimagen = '#' + 'idviewitemfotocam' + value;
                $($divimagen).attr("src", result);
            }
        }

        {{--ENVIAR IMAGENES AL CONTROLADOR (TAMBIEN SE PUEDE A LA BD) */--}}
        $(document).on('click', '#btnaccionguardarfotosuecam', function () {
                for(var i = 1; i <= contfotoueadd; i++) {
                    $iditemtitulofoto = '#'+'iditemtitulofoto'+i;
                    $iditemfotocam = '#'+'iditemfotocam'+i;
                    $iditemperspectivafoto = '#'+'iditemperspectivafoto'+i;
                    $fotoinsertdcorrect = '#'+'fotoinsertdcorrect'+i;
                    /*$iduec = $('input[name=txtueautocompletadod]').val();*/

                    var formData = new FormData();
                    formData.append('_token', $('input[name=_token]').val());
                    formData.append('titulofoto', $($iditemtitulofoto).val());
                    formData.append('imagen', $($iditemfotocam)[0].files[0]);
                    formData.append('perspectiva', $($iditemperspectivafoto).val());
                    /*formData.append('idUEC', $iduec);*/
                    $.ajax({
                        url: '{{route('btnstoreimges.store')}}',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                    }).done(function(data) {
                        $($fotoinsertdcorrect).text(data);
                    }).fail(function () {
                        alert('Algo esta mal, verifica si es imagen o si existen registros de unidades educativas');
                    });
                }
            }
        );
    </script>

@endsection



