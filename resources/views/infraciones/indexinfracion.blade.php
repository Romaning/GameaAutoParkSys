@extends('layouts.layoutmaster')
@section('title')

@endsection
@section('styles')
    <!-- Page JS Plugins CSS DATATABLES-->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
@endsection
@section('hero_cuadro_bienvenida')
    <!-- Hero -->

    <!-- END Hero -->
    {{--@include('componentes.4_A_Hero(otrabienvenida)')--}}
@endsection
@section('content')
    @if(session()->has('alert-success'))
        <div class='alert alert-success d-flex align-items-center' role='alert'>
            <div class='flex-00-auto'>
                <i class='fa fa-fw fa-check'></i>
            </div>
            <div class='flex-fill ml-3'>
                <p class='mb-0'>  {{ session()->get('alert-success') }}<a class='alert-link'
                                                                          href='javascript:void(0)'></a>!</p>
            </div>
        </div>
    @endif
    @if (session('status'))
        <div class='alert alert-success d-flex align-items-center' role='alert'>
            <div class='flex-00-auto'>
                <i class='fa fa-fw fa-check'></i>
            </div>
            <div class='flex-fill ml-3'>
                <p class='mb-0'>  {{ session('status') }}<a class='alert-link' href='javascript:void(0)'></a>!</p>
            </div>
        </div>
    @endif
    @csrf
    <div class="block">
        <div class="block-content block-content-full block invisible shadow rounded" data-toggle="appear"
             data-class="animated flipInX">
            <div>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">ID</th>
                        <th class="d-none d-sm-table-cell">PLACA</th>
                        <th class="d-none d-sm-table-cell">GESTION</th>
                        <th class="d-none d-sm-table-cell">FECHA</th>
                        <th class="d-none d-sm-table-cell">SERIE</th>
                        <th class="d-none d-sm-table-cell">BOLETA</th>
                        <th class="d-none d-sm-table-cell">CODIGO</th>
                        <th class="d-none d-sm-table-cell">DESCRIPCION</th>
                        <th class="d-none d-sm-table-cell">MONTO</th>
                        <th style="width:10%" class="text-sm-center font-size-sm">
                            <a href="{{route('infraccion.create')}}"
                               class="btn-sm btn-primary shadow rounded">
                                <i class="fa fa-plus-circle"></i> Añadir
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($infracionesInst as $filainfracion)
                        <tr>
                            <td class="text-center font-size-sm">
                                {{$filainfracion->infraccion_id}}
                            </td>
                            <td class="text-center">
                                {{$filainfracion->placa_id}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filainfracion->gestion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filainfracion->fecha_infraccion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filainfracion->serie}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filainfracion->boleta}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filainfracion->condigo}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filainfracion->descripcion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filainfracion->monto}}
                            </td>
                            <td class="justify-content-center">
                                <div class="row text-sm-center">
                                    <div class="col-sm-1">
                                        <a href="{{route('infraccion.show',$filainfracion->infraccion_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{route('infraccion.edit',$filainfracion->infraccion_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form
                                            action="{{route('infraccion.destroy',$filainfracion->infraccion_id)}}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button href="" type="submit" class="btn btn-sm btn-light push mb-md-0"
                                                    data-toggle="tooltip"
                                                    title="ELIMINAR">
                                                <i class="fa fa-trash"></i>
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
@endsection

