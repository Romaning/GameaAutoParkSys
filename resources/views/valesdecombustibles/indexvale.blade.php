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
                        {{--<th class="d-none d-sm-table-cell">ID</th>--}}
                        <th class="d-none d-sm-table-cell">ID</th>
                        <th class="d-none d-sm-table-cell">FECHA DE ASIGNACIONDE VALE DE COMBUSTIBLE</th>
                        <th class="d-none d-sm-table-cell">PLACA VEHICULO</th>
                        <th class="d-none d-sm-table-cell">REGISTRADO EL</th>
                        <th class="d-none d-sm-table-cell">ACTUALIZADO EL</th>
                        <th style="width:10%" class="text-sm-center font-size-sm">
                            <a href="{{route('vale.create')}}"
                               class="btn-sm btn-primary shadow rounded">
                                <i class="fa fa-plus-circle"></i> Añadir
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datosvales as $datovale)
                        <tr>
                            <td class="text-center font-size-sm">
                                {{$datovale->id}}
                            </td>
                            <td class="text-center">
                                {{$datovale->fecha_entrega}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$datovale->placa_id}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$datovale->created_at}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$datovale->updated_at}}
                            </td>

                            <td class="justify-content-center">
                                <div class="row text-sm-center">
                                    <div class="col-sm-1">
                                        <a href="{{route('vale.show',$datovale->id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{route('vale.edit',$datovale->id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form
                                            action="{{route('vale.destroy',$datovale->id)}}"
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

