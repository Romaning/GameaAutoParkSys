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
    <!-- Page JS DIRECTO PARA SHOW VEHICULO -->
    <style>

    </style>
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    {{csrf_field()}}

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
                    {{--<h3 class="jumbotron">Laravel Multiple Images Upload Using Dropzone</h3>--}}
                    <form method="post" action="{{route('docsprop.storefile')}}" enctype="multipart/form-data"
                          class="dropzone" id="dropzone">
                        @csrf
                        <input type="text" class="form-control shadow p-2 mb-1 rounded " id="placa_id"
                               name="placa_id" value="{{$vehiculo}}">
                        <div class="dz-message">
                            Sube Tus imagenes aquí
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Dropzone -->
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
    {{-- ################ END SCRIPTS PARA DROPZONE ###############--}}
    <script>

        var placavehiculo = $('#placa_id').val();
        Dropzone.options.dropzone = {
            init: function () {
                myDropzone = this;
                $.ajax({
                    url: '{{route('docsprop.autocomplet')}}',
                    type: 'POST',
                    data: {'requerimiento': 2, 'placa_id': placavehiculo},
                    success: function (response) {
                        placavehiculo = $('#placa_id').val();
                        $.each(response, function (key, value) {
                            var mockFile = {name: value.nombre, size: 2040};
                            myDropzone.emit("addedfile", mockFile);
                            myDropzone.emit("thumbnail", mockFile, '/proyecto3/GameaAutoParkSys/public/' + value.carpetamasarchivo);
                            myDropzone.emit("complete", mockFile);
                        });
                    }
                });
            },
            maxFilesize: 20,
            renameFile: function (file) {
                return /*placavehiculo+''+*/ file.name /*.replace(/\s/g,"_")*/;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function (file) {
                /*file.name = file.name.replace(/\s/g,"_");*/
                var name = file.name.replace(/\s/g, "_");/*LE CONCAT CON LA PLACA PORQUE EN EL CONTROLADOR LE ESAMOS DANDO IGUAL*/   /*placavehiculo+file.upload.filename*/
                /*CON EL FILE.UPLOAD.FILENAME DICE QUE OBTENGAS EL NOMBRE CON EL QUE SE HA SUBIDO ESE ARCHIVO, OSEA EN EL renameFILE*/
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{route("docsprop.deletefile")}}',
                    data: {filename: name, placa_id: placavehiculo},
                    success: function (data) {
                        /*SE RECIBE LA RESPUESTA DEL CONTROLADOR AL ELIMINAR UNA IMAGEN ########*/
                        console.log("File has been successfully removed!!" + data);
                    },
                    error: function (e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },

            success: function (file, response) {
                console.log(response);
                /*AQUI VIENE LA RESPUESTA DESDE CUALQUIER CONTROLADOR AL QUE SE HAY ENVIADO ##########*/
            },
            error: function (file, response) {
                return false;
            }
        };
    </script>
@endsection
