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

        <button id="enviar_alog">CLICK</button>

        UPLOAD IMG
        <div id="mensaje" style="display: none"></div>

        <form id="subida_formulario" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="file" name="" id="imagen_file_id">
            <input type="submit" name="subida" id="subida" value="Subida">
        </form>

        <span id="imagen_subida"></span>

        <script src="{{asset('jsduplicated/jquery-3.4.1.js')}}"></script>
        <script src="{{asset('assets/js/core/bootstrap.bundle.min.js')}}"></script>

        <script>
            $('#subida_formulario').on('submit',function (event) {
                event.preventDefault();
               $.ajax({
                    method: "POST",
                    url:"{{route('storeimg1.store')}}",
                    data:new FormData(this),
                    dataType:"JSON",
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function (data) {
                        $('#mensaje').css('display','block');
                        $('#mensaje').html(data.mensaje_serv_texto);
                        $('#mensaje').addClass(data.mensaje_serv_clase_css);
                        $('#imagen_subida').html(data.mensaje_de_servidor_codigo);
                    }
               });
            });
        </script>
    </body>
</html>

