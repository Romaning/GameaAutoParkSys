@extends('layouts.layoutmaster')
@section('title')

@endsection
@section('styles')
    <!-- Page JS Plugins CSS DATATABLES-->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @csrf
    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        {{--<div class="block-header">
            <h3 class="block-title">Tabla Dinamica<small>  Boton exportar</small></h3>
        </div>--}}
        <div class="block-content block-content-full shadow rounded"  data-toggle="appear" data-class="animated bounceIn">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                <tr>
                    <th class="text-center" style="width: 1%;">ID</th>
                    {{--<th>Nombre Clase</th>--}}
                    <th>Fecha Inicio</th>
                    <th>Placa</th>
                    <th>Estado</th>
                    <th>Motivo</th>
                    <th class="d-none d-sm-table-cell" style="width: 19%;">Creado</th>
                    <th class="d-none d-sm-table-cell" style="width: 19%;">Actualizado</th>
                    <th style="width:12%;" class="text-sm-center font-size-sm">
                        <a href="{{route('estservvehi.create')}}"
                           class="btn-sm btn-primary shadow rounded">
                            <i class="fa fa-plus-circle"></i> Añadir
                        </a>
                    </th>
                    {{-- <th style="width: 15%;">Botones</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($datosestservvehi as $filaestservvehi)
                    <tr>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaestservvehi->est_serv_vehiculo_id}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaestservvehi->fecha_inicio}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaestservvehi->placa_id}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaestservvehi->est_descripcion}}
                        </td>

                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaestservvehi->motivo}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaestservvehi->created_at}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaestservvehi->updated_at}}
                        </td>
                        <td class="d-none d-sm-table-cell text-right">
                            <div class="row text-center">
                                <div class="col-sm-1">
                                    <a href="{{route('estservvehi.show',$filaestservvehi->est_serv_vehiculo_id)}}"
                                       class="btn btn-sm btn-light push mb-md-0" data-toggle="tooltip"
                                       title="VER INFORMACION COMPLETA">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                                <div class="col-sm-1">
                                    <a href="{{route('estservvehi.edit',$filaestservvehi->est_serv_vehiculo_id)}}"
                                       class="btn btn-sm btn-light push mb-md-0" data-toggle="tooltip"
                                       title="EDITAR">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </div>
                                <div class="col-sm-1">
                                    <form action="{{route('estservvehi.destroy',$filaestservvehi->est_serv_vehiculo_id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-light push mb-md-0" data-toggle="tooltip"
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
    <!-- END Dynamic Table with Export Buttons -->
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
    {{-- ################ END SCRIPTS PARA DATATABLESS ###############--}}
@endsection

