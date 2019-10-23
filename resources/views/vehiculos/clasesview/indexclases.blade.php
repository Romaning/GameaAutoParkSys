@extends('layouts.layoutmaster')
@section('title')
    Clases
@endsection
@section('styles')
    <!-- Page JS Plugins CSS DATATABLES-->
    <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">
@endsection
@section('hero_cuadro_bienvenida')
    <!-- Hero -->

    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    TABLA DE CLASES
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        Informacion para brindar a Vehiculos
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Tablas</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Tabla de Datos</a>
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
    <!-- Dynamic Table with Export Buttons -->
    <div class="block">

        {{--<div class="block-header">
            <h3 class="block-title">Tabla Dinamica<small>  Boton exportar</small></h3>
        </div>--}}
        <div class="block-content block-content-full block invisible" data-toggle="appear"
             data-class="animated flipInX{{--bounceIn--}}">
        {{--<button class="dt-button buttons-print" tabindex="0" aria-controls="example" type="button"><span>Print</span></button>--}}

        <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                <tr>
                    <th class="d-none d-sm-table-cell" style="width: 1%;">ID</th>
                    {{--<th>Nombre Clase</th>--}}
                    <th class="d-none d-sm-table-cell">Nombre Clase</th>
                    <th class="d-none d-sm-table-cell" style="width: 19%;">Creado</th>
                    <th class="d-none d-sm-table-cell" style="width: 19%;">Actualizado</th>
                    <th style="width:13%;" class="text-sm-center font-size-sm">
                        <a href="{{route('clase.create')}}"
                           class="{{--btn --}}{{--dt-button buttons-copy buttons-html5 btn --}} badge badge-primary d-none d-sm-table-cell font-size-sm">
                            <i class="fa fa-plus-circle"></i> Agregar
                        </a>
                    </th>
                    {{-- <th style="width: 15%;">Botones</th>--}}
                </tr>
                </thead>
                <tbody>
                @foreach($datosclase as $filaclase)
                    <tr>
                        <td class="text-center font-size-sm">
                            {{$filaclase->clase_id}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaclase->clase_descripcion}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaclase->created_at}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$filaclase->updated_at}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            <div class="row">
                                <div class="col-sm-1">
                                    <a href="{{route('clase.show',$filaclase->clase_id)}}" class="badge badge-success"
                                       data-toggle="tooltip"
                                       title="VER INFORMACION COMPLETA">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <div class="col-sm-1">
                                    <a href="{{route('clase.edit',$filaclase->clase_id)}}" class="badge badge-warning"
                                       data-toggle="tooltip"
                                       title="EDITAR">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </div>
                                <div class="col-sm-1">
                                    <form action="{{route('clase.destroy',$filaclase->clase_id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button href="" type="submit" class="badge badge-danger" data-toggle="tooltip"
                                                title="ELIMINAR">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            {{--<td class="d-none d-sm-table-cell font-size-sm text-sm-center">
                                <div class="row">
                                    <div class="col-sm-1">
                                        <a href="{{route('clase.show',$filaclase->clase_id)}}" class="badge badge-success"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a></div>
                                    <div class="col-sm-1">
                                        <a href="{{route('clase.edit',$filaclase->clase_id)}}" class="badge badge-warning"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form action="{{route('clase.destroy',$filaclase->clase_id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="" type="submit" class="badge badge-danger" data-toggle="tooltip"
                                               title="ELIMINAR">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </form>
                                    </div>
                                </div>--}}
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
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/dataTables.buttons.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>

@endsection


