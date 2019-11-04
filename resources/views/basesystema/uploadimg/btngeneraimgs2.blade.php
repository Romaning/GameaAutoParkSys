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
<div class="row">

    <input type="text" id="titulofoto">
    <input type="file" id="imagen">
    <input type="text" id="perspectiva">
    <button id="btnguardarfoto">
        GUARDAR FOTOS
    </button>
    <div id="fotoinsertdcorrect"></div>
</div>

<script src="{{asset('jsduplicated/jquery-3.4.1.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.bundle.min.js')}}"></script>

<script>
    /*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
    {{--ENVIAR IMAGENES AL CONTROLADOR (TAMBIEN SE PUEDE A LA BD) */--}}
    $(document).on("click", "#btnguardarfoto", function () {
        var formData = new FormData();
        /*formData.append('_token', $('input[name=_token]').val());*/
        formData.append("titulofoto", $("#titulofoto").val());
        formData.append("imagen", $("#imagen")[0].files[0]);
        formData.append("perspectiva", $("#perspectiva").val());
        /*formData.append('idUEC', $iduec);*/
        $.ajax({
            method: "POST",
            url: "{{route('btnstoreimges.store')}}",
            data: formData,
            processData: false,
            contentType: false
        }).done(function (data) {
            $("#fotoinsertdcorrect").text(data);
        }).fail(function () {
            alert("Algo esta mal, verifica si es imagen o si existen registros de unidades educativas");
        });
    });
</script>
</body>
</html>

