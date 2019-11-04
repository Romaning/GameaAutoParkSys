@extends('layouts.layoutmaster')
@section('title')
    VEHICULOS
@endsection
@section('styles')
    {{-- ################ START CSSS SCRIPT PARA DATATABLESS ###############--}}
    @include('components.links_css_js.datatable.datatable_css')
    {{--######################## END CSS SCRIPT DATABLE ####################--}}
@endsection
@section('hero_cuadro_bienvenida')
    <div class="bg-image" style="background-image: url({{asset('image_proyect/fondo_hero3.jpg')}});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{asset('image_proyect/fondo_hero3.jpg')}}" alt=""
                         id="imagen_perfil_hero">
                </div>
                <h1 class="h2 text-white mb-0"></h1>
                <span class="text-white-75" id="ci_perfil_hero">Nombre Funcionario</span>
            </div>
        </div>
    </div>
@endsection
@section('content')
    {{--####################################### CABECERA DE IMPRESION ##############################--}}
    <div id="cabecera_carta_general" class="d-none">
        <div class="row mb-4">
            <!-- Company Info -->
            <div class="col-6 font-size-sm">
                <p class="h3">Company</p>
                <address>
                    Street Address<br>
                    State, City<br>
                    Region, Postal Code<br>
                    ltd@example.com
                </address>
            </div>
            <!-- END Company Info -->

            <!-- Client Info -->
            <div class="col-6 text-right font-size-sm">
                <p class="h3">Client</p>
                <address>
                    Street Address<br>
                    State, City<br>
                    Region, Postal Code<br>
                    ctr@example.com
                </address>
            </div>
            <!-- END Client Info -->
        </div>
    </div>
    {{--####################################### END CABECERA DE IMPRESION ##############################--}}
    @include('components.alerts.alerttre')

    @csrf
    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        <div class="block-content block-content-full block invisible shadow rounded" data-toggle="appear"
             data-class="animated bounceIn">
            <div>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons" id="table_vehiculo_print">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">N° PLACA</th>
                        <th class="d-none d-sm-table-cell">N° CRPVA</th>
                        <th class="d-none d-sm-table-cell">N° CHASIS</th>
                        <th class="d-none d-sm-table-cell">N° MOTOR</th>
                        <th class="d-none d-sm-table-cell">Marca</th>
                        <th class="d-none d-sm-table-cell">Estado Serv</th>
                        <th style="width:10%;" class="text-sm-center font-size-sm">
                            <a href="{{route('vehiculo.create')}}"
                               class="btn-sm btn-primary shadow rounded">
                                <i class="fa fa-plus-circle"></i> Añadir
                            </a>
                        </th>
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
                                @if($filavehiculos->est_descripcion == "EN SERVICIO")
                                    <div class="d-none d-sm-table-cell">
                                        <span class="badge badge-success ">{{$filavehiculos->est_descripcion}}</span>
                                    </div>
                                @else
                                    <div class="d-none d-sm-table-cell">
                                        <span class="badge badge-danger ">{{$filavehiculos->est_descripcion}}</span>
                                    </div>
                                @endif
                            </td>

                            <td class="justify-content-center">
                                <div class="row text-sm-center">
                                    <div class="col-sm-1">
                                        <a href="{{route('vehiculo.show',$filavehiculos->placa_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{route('vehiculo.editsolo',$filavehiculos->placa_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form action="{{route('vehiculo.destroy',$filavehiculos->placa_id)}}"
                                              method="post" onsubmit="return confirmation()">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-light push mb-md-0"
                                                    data-toggle="tooltip"
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
    @include('components.links_css_js.datatable.datatable_js')
    {{--######################## END SCRIPT DATABLE ####################--}}

    {{-- ################ START CONFIRMAR ELIMINACION FORM ###############--}}
    @include('components.confirmation.confirmationdelete_js')
    {{-- ################# END CONFIRMAR ELIMINACION FORM ###############--}}
@endsection

