@extends('layouts.layoutmaster')
@section('title')

@endsection
@section('styles')
    <!-- Page JS Plugins CSS DATATABLES-->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
    {{--estilo de la pagina--}}
    <style>
        :root {
            --bg: #1a1e24;
            --color: #eee;
            --font: Montserrat, Roboto, Helvetica, Arial, sans-serif;
        }

        .warappero {
            padding: 0.5rem 0;
            filter: url('#goo');
        }

        .btn-liquid-me {
            display: inline-block;
            text-align: center;
            background: #eee; /*var(--color);*/
            color: #1a1e24; /*var(--bg);*/
            font-weight: bold;
            padding: 0.6em 0.5em 0.4em;
            line-height: 1;
            border-radius: 0.6em;
            position: relative;
            min-width: 3em;
            text-decoration: none;
            font-family: Montserrat, Roboto, Helvetica, Arial, sans-serif; /*var(--font);*/
            font-size: 0.6rem;
        }

        .btn-liquid-me:before,
        .btn-liquid-me:after {
            width: 2em;
            height: 1em;
            position: absolute;
            content: "";
            display: inline-block;
            background: #eee; /*var(--color);*/
            border-radius: 50%;
            transition: transform 1s ease;
            transform: scale(0);
            z-index: -1;
        }

        .btn-liquid-me:before {
            top: -25%;
            left: 20%;
        }

        .btn-liquid-me:after {
            bottom: -25%;
            right: 20%;
        }

        .btn-liquid-me:hover:before,
        .btn-liquid-me:hover:after {
            transform: none;
        }
    </style>
@endsection
@section('hero_cuadro_bienvenida')
    <!-- Hero -->

    <!-- END Hero -->
    {{--@include('componentes.4_A_Hero(otrabienvenida)')--}}
@endsection
@section('content')

    {{--<div class="warappero">
        <a class="btn-liquid-me" href="#">Hover me!</a>
    </div>
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
            <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
            </filter>
        </defs>
    </svg>--}}

    @csrf
    <!-- Dynamic Table with Export Buttons -->
    <div class="block">
        {{--<div class="block-header">
            <h3 class="block-title">Tabla Dinamica<small>  Boton exportar</small></h3>
        </div>--}}
        <div class="block-content block-content-full block invisible shadow rounded" data-toggle="appear"
             data-class="animated flipInX{{--bounceIn--}}">
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
                        <th style="width:10%;" class="text-sm-center font-size-sm">
                            <a href="{{route('vehiculo.create')}}"
                               class="btn-sm btn-primary shadow rounded">
                                <i class="fa fa-plus-circle"></i> Añadir
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
                                {{--<div class="row justify-content-center">
                                    <div class="col-xs-1 --}}{{--col-sm-4 col-md-3 col-lg-3--}}{{-- align-center">
                                        <div class="--}}{{--btn-group--}}{{-- btn-group-xs">
                                            <a href="#" class="btn bg-primary"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 --}}{{--col-sm-4 col-md-3 col-lg-3--}}{{-- align-center">
                                        <div class="--}}{{--btn-group--}}{{-- btn-group-xs">
                                            <a href="#" class="btn bg-primary"><i class="fa fa-pen"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-1 --}}{{--col-sm-4 col-md-3 col-lg-3--}}{{-- align-center">
                                        <div class="--}}{{--btn-group--}}{{-- btn-group-xs">
                                            <a href="#" class="btn bg-primary"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>--}}
                                <div class="row text-sm-center">
                                    <div class="col-sm-1">
                                        <a href="{{route('vehiculo.show',$filavehiculos->placa_id)}}"
                                           class="btn {{--btn-success--}} btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{route('vehiculo.editsolo',$filavehiculos->placa_id)}}"
                                           class="btn {{--btn-warning--}}  btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1 d-none">
                                        <form action="{{route('vehiculo.destroy',$filavehiculos->placa_id)}}"
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn {{--btn-danger--}} btn-sm btn-light push mb-md-0"
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

    <!-- END Dynamic Table with Export Buttons -->
    <div class="block d-none">
        <div class="block-header">
            <h3 class="block-title">SweetAlert2</h3>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-6">
                    <!-- Simple -->
                    <h4 class="border-bottom pb-2">Simple</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing a simple message
                    </p>
                    <button type="button" class="js-swal-simple btn btn-light push">
                        Launch Dialog
                    </button>
                    <!-- END Simple -->
                </div>
                <div class="col-md-6">
                    <!-- Success -->
                    <h4 class="border-bottom pb-2">Success</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing a message after a successful operation
                    </p>
                    <button type="button" class="js-swal-success btn btn-light push">
                        <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
                    </button>
                    <!-- END Success -->
                </div>
                <div class="col-md-6">
                    <!-- Info -->
                    <h4 class="border-bottom pb-2">Info</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing an informational message
                    </p>
                    <button type="button" class="js-swal-info btn btn-light push">
                        <i class="fa fa-info-circle text-info mr-1"></i> Launch Dialog
                    </button>
                    <!-- END Info -->
                </div>
                <div class="col-md-6">
                    <!-- Warning -->
                    <h4 class="border-bottom pb-2">Warning</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing a warning message
                    </p>
                    <button type="button" class="js-swal-warning btn btn-light push">
                        <i class="fa fa-exclamation-triangle text-warning mr-1"></i> Launch Dialog
                    </button>
                    <!-- END Warning -->
                </div>
                <div class="col-md-6">
                    <!-- Error -->
                    <h4 class="border-bottom pb-2">Error</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing a message after a failed operation
                    </p>
                    <button type="button" class="js-swal-error btn btn-light push">
                        <i class="fa fa-times-circle text-danger mr-1"></i> Launch Dialog
                    </button>
                    <!-- END Error -->
                </div>
                <div class="col-md-6">
                    <!-- Question -->
                    <h4 class="border-bottom pb-2">Question</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing a question message
                    </p>
                    <button type="button" class="js-swal-question btn btn-light push">
                        <i class="fa fa-question-circle text-muted mr-1"></i> Launch Dialog
                    </button>
                    <!-- END Question -->
                </div>
                <div class="col-md-6">
                    <!-- Confirmation -->
                    <h4 class="border-bottom pb-2">Confirmation</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing a confirmation message
                    </p>
                    <button type="button" class="js-swal-confirm btn btn-light push mb-md-0">
                        <i class="fa fa-check-square text-muted mr-1"></i> Launch Dialog
                    </button>
                    <!-- END Confirmation -->
                </div>
                <div class="col-md-6">
                    <!-- Custom Position -->
                    <h4 class="border-bottom pb-2">Custom Position</h4>
                    <p class="font-size-sm text-muted mb-2">
                        A dialog showing at the top right of the screen
                    </p>
                    <button type="button" class="js-swal-custom-position btn btn-light">
                        <i class="fa fa-bolt text-muted mr-1"></i> Launch Dialog
                    </button>
                    <!-- END Custom Position -->
                </div>
            </div>
        </div>
    </div>
    <!-- END SweetAlert2 -->
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

