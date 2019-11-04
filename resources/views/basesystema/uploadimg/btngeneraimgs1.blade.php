<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/oneui.css')}}">
</head>
<body>
{{csrf_field()}}
<div class="row">

    <div class="col">
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="btn_insertar_documentos_vehiculo">
                INSERTAR DOCUMENTOS
            </button>
        </div>
    </div>

    {{--################################### GENERAR BOTONES ##########################################--}}
    <div class="col">
        {{--TABLA DE IMAGENES A INSERTAR--}}
        <br><br>
        <button type="button" id="btngenerabotonesinputfile" class="btn btn-primary" style="margin-bottom: 10px;"
                data-toggle="tooltip"
                title="CLICK PARA INSERTAR IMAGEN O VARIAS IMAGENES">
            {{--ACCIONA EL BOTON--}}
            AGREGAR FOTOS
        </button>
        <div class="col-md-7">
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

</div>

<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.bundle.min.js')}}"></script>

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

    /*ELIMNAR FOTO SELECIONADO DE TABLA DE IMAGENES*/
    function eliminaritemfoto(val) {
        $('#idrowfue' + val).remove();
        itemsfotoeliminado.push(val);
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
                alert('HOLA MUNDO');
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
</body>
</html>

