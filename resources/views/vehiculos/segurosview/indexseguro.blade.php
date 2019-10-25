@extends('layouts.layoutmaster')
@section('title')
    VEHICULOS
@endsection
@section('styles')
    <!-- Page JS Plugins CSS DATATABLES-->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
    {{--estilo de la pagina--}}
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @csrf
    <div class="block">
        <div class="block-content block-content-full block invisible" data-toggle="appear"
             data-class="animated flipInX{{--bounceIn--}}">
            <div {{--class="block invisible" data-toggle="appear" data-class="animated flipInX"--}}> {{--esta parte hace que la tabal tenga amimacion--}}
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">N° PLACA</th>
                        <th class="d-none d-sm-table-cell">GESTION</th>
                        <th class="d-none d-sm-table-cell">DESCRIPCION</th>
                        <th class="d-none d-sm-table-cell">EMPRESA ASEGURADORA</th>
                        <th class="d-none d-sm-table-cell">FECHA DE VIGENCIA</th>
                        <th class="d-none d-sm-table-cell" style="width:13%;">ARCHIVOS SUBIDOS</th>
                        <th style="width:10%;" class="text-sm-center">
                            <a href="{{route('seguro.create')}}"
                               class="btn-sm btn-primary">
                                <i class="fa fa-plus"></i>Añadir
                            </a>
                        </th>
                        {{-- <th style="width: 15%;">Botones</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datosseguro as $filadatosseguro)
                        <tr>
                            <td class="text-center font-size-sm">
                                {{$filadatosseguro->placa_id}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadatosseguro->gestion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadatosseguro->texto}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadatosseguro->empresa_aseguradora}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadatosseguro->fecha_vigencia}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                <div class="col-md-12" style="float: right;">
                                    <input type="file" class="custom-file-input" value="" id="archiv" name="campoe">
                                    <label class="custom-file-label" for="archiv" id="nfile">{{$filadatosseguro->archivo_subido}}</label>
                                </div>
                            </td>

                            <td class="justify-content-center">
                                <div class="row text-sm-center">
                                    <div class="col col-xl-3">
                                        <a href="{{route('seguro.show',$filadatosseguro->id)}}"
                                           class="btn btn-success btn-sm" data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col col-xl-3">
                                        <a href="{{route('seguro.edit',$filadatosseguro->id)}}"
                                           class="btn btn-warning btn-sm" data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col col-xl-3">
                                        <form action="{{route('seguro.destroy',$filadatosseguro->id)}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                    title="ELIMINAR">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('js_script_import')
    {{-- ################ START SCRIPTS PARA DATATABLESS ###############--}}
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>
    {{--#################### js #################--}}
    <script>
        var nuveorequerimiento = $('#body_tb_insertar_campos').html();
        $(document).on('click', '#btn_generar_filas', function () {
            /*contador = contador +1;*/
            $('#body_tb_insertar_campos').append(nuveorequerimiento);
            $(".datepickerr"/*+contador*/).flatpickr();
            $(".datepickerr"/*+contador*/).flatpickr("option", "dateFormat", "yy-mm-dd");
        });

        $(document).on('click', '.btn-eliminar', function () {
            $(this).parent().remove();
        })


        document.getElementById('archiv').onchange = function () {
            console.log(this.value);
            document.getElementById('nfile').innerHTML = document.getElementById('archiv').files[0].name;
        }
    </script>
@endsection

