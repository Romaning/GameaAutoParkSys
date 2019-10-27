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

    <div class="block shadow  p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-content">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{route('docsrenov.create')}}" class="btn-sm btn-primary shadow rounded" style="float: right"> <i class="fa fa-plus-circle"></i> AÑADIR</a>
                </div>
            </div>
        </div>
    </div>
    @php
        $colorplaca1 = "btn-success";
        $colorblock = "";
        $anterior="";
    @endphp
    @foreach($datosdocsrenov as $filadocrenov)
        @php
            if(empty($anterior)){
                $anterior="A";
            }
        @endphp
        @if($anterior == $filadocrenov->placa_id)
            @if($colorplaca1 == "btn-success")
                @php
                    $colorblock = "";
                    $colorplaca1 = "btn-success";
                @endphp
            @else
                @php
                    $colorplaca1 = "btn-warning";
                    $colorblock = "bg-black-5";
                @endphp
            @endif
        @else
            @if($colorplaca1 == "btn-warning")
                @php
                    $colorblock = "";
                    $colorplaca1 = "btn-success";
                @endphp
            @else
                @php
                    $colorplaca1 = "btn-warning";
                    $colorblock = "bg-black-5";
                @endphp
            @endif
        @endif
        @if(($anterior = $filadocrenov->placa_id) == "TU")
            {{"S"}}
        @endif
        <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
        <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
        <div class="block {{--shadow--}}  p-2 mb-1 shadow rounded {{$colorblock}}" data-toggle="appear"
             data-class="animated bounceIn">
            <div class="block-content">
                <input type="hidden" name="placa_id" value="" id="placa_id_subida_docs_renov_vehicular">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="placa_id_subida_docs_renov_vehicular">PLACA</label>
                            <input type="text" name="placa_id" value="{{ $filadocrenov->placa_id}}"
                                   id="placa_id_subida_docs_renov_vehicular"
                                   class="form-control btn {{$colorplaca1}}" style="height: 100%;">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="gestion_var_front">GESTION</label>
                            <input type="text" value="{{ $filadocrenov->gestion}}" name="gestion"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
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

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>INSPECCION VEHICULAR</label>
                            <div class="custom-control custom-switch custom-control-lg mb-2">
                                <input type="checkbox" class="custom-control-input" id="example-sw-custom-lg2"
                                       name="inspeccion_vehicular"
                                       value="1" @if($filadocrenov->inspeccion_vehicular == "1") checked @endif>
                                <label class="custom-control-label"
                                       for="example-sw-custom-lg2">{{$filadocrenov->inspeccion_vehicular == "1"? "SI":"NO"}}</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1">
                        <div class="form-group">
                            <div class="custom-control custom-switch custom-control-lg mb-2">
                                <a href="{{route('docsrenov.edit',$filadocrenov->archivero_id)}}"
                                   class="btn {{$colorplaca1}} btn-sm btn-light push mb-md-0" data-toggle="tooltip"
                                   title="EDITAR">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="mensaje_respuesta_form_subir_docs_renov_vehicular"></div>
        </div>
        <!-- END Flatpickr Datetimepicker -->
    @endforeach

@endsection

@section('footer')

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


        /*JQUERY PARA ENVIAR FORM DE DOCUEMENTOS RENOVABLES*/
        $('#form_subir_docs_renov_vehicular').submit(function () {
            $.ajax({
                method: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (data) {
                    $('#mensaje_respuesta_form_subir_docs_renov_vehicular').html(data);
                }
            });
            return false;
        });

    </script>

@endsection