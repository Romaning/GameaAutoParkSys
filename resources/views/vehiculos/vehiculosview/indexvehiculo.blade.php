@extends('layouts.layoutmaster')
@section('title')
    MARCAS
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
                    TABLA DE MARCAS
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
    @csrf
    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        {{--<div class="block-header">
            <h3 class="block-title">Tabla Dinamica<small>  Boton exportar</small></h3>
        </div>--}}
        <div class="block-content block-content-full block invisible" data-toggle="appear" data-class="animated flipInX{{--bounceIn--}}">

            <div {{--class="block invisible" data-toggle="appear" data-class="animated flipInX"--}}> {{--esta parte hace que la tabal tenga amimacion--}}
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">N° PLACA</th>
                        <th class="d-none d-sm-table-cell">N° CRPVA</th>
                        <th class="d-none d-sm-table-cell">N° CHASIS</th>
                        <th class="d-none d-sm-table-cell">N° MOTOR</th>
                        <th class="d-none d-sm-table-cell">Marca</th>
                        <th class="d-none d-sm-table-cell">Estado Serv</th>
                        <th style="width:12%;" class="text-center">
                            <a href="{{route('vehiculo.create')}}"
                               class="{{--btn --}}dt-button buttons-copy buttons-html5 btn btn-sm btn-primary">
                                <i class="fa fa-plus"></i>Añadir
                            </a>
                        </th>
                        {{-- <th style="width: 15%;">Botones</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datosvehiculos as $filavehiculos)
                        <tr>
                            <td class="text-center font-size-sm">
                                {{$filavehiculos->placa_id}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->numero_crpva}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->numero_chasis}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->numero_motor}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->marca_descripcion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                               {{-- {{$filavehiculos->estado_servicio}}--}}
                            </td>

                            <td class="d-none d-sm-table-cell text-right">
                                <div class="row text-center">
                                    <div class="col col-xl-3">
                                        <a href="{{route('vehiculo.show',$filavehiculos->placa_id)}}"
                                           class="btn btn-success btn-sm" data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col col-xl-3">
                                        <a href="{{route('vehiculo.edit',$filavehiculos->placa_id)}}"
                                           class="btn btn-warning btn-sm" data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col col-xl-3">
                                        <form action="{{route('vehiculo.destroy',$filavehiculos->placa_id)}}"
                                              method="post">
                                            @csrf
                                            @method('delete')
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
    <!-- Animation Classes -->
    <h2 class="content-heading">Animated <small>You can use the animation classes of your choice</small></h2>
    <div class="row">
        <div class="col-sm-4">
            <div class="block invisible" data-toggle="appear" data-class="animated bounceIn">
                <div class="block-content block-content-full">
                    <div class="py-5 text-center">
                        <div class="item item-2x item-rounded bg-warning text-white mx-auto">
                            <i class="si fa-2x si-user"></i>
                        </div>
                        <div class="font-size-h4 font-w600 pt-3 mb-0">Users</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block invisible" data-toggle="appear" data-class="animated flipInX">
                <div class="block-content block-content-full">
                    <div class="py-5 text-center">
                        <div class="item item-2x item-rounded bg-danger text-white mx-auto">
                            <i class="si fa-2x si-settings"></i>
                        </div>
                        <div class="font-size-h4 font-w600 pt-3 mb-0">Settings</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="block invisible" data-toggle="appear" data-class="animated flash">
                <div class="block-content block-content-full">
                    <div class="py-5 text-center">
                        <div class="item item-2x item-rounded bg-info text-white mx-auto">
                            <i class="si fa-2x fa-2x si-rocket"></i>
                        </div>
                        <div class="font-size-h4 font-w600 pt-3 mb-0">Startup</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Animation Classes -->

    <!-- END Dynamic Table with Export Buttons -->
@endsection
@section('js_script_import')
    {{-- ################ START SCRIPTS PARA DATATABLESS ###############--}}
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
    <script src="assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_tables_datatables.min.js"></script>
    {{-- ################ END SCRIPTS PARA DATATABLESS ###############--}}
@endsection

