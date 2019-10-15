@extends('layouts.layoutmaster')
@section('title')
    Clases
@endsection
@section('styles')
    <!-- Page JS Plugins CSS DATATABLES-->
@endsection
@section('hero_cuadro_bienvenida')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    FORM CREAR TIPO
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        Ver informacion completa de registro de tipo
                    </small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Form</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Formulario de datos</a>
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
    <div class="block shadow p-2 mb-1 rounded">
        <div class="block-header">
            <h3 class="block-title"></h3>
        </div>
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-lg">

                <div class="modal-body" style="font-weight: bold;">

                    <div class="form-group">
                        <div class="row">
                            <div class="col col-sm-2">
                                ID
                                <div class="btn-warning shadow p-2 mb-1 rounded">{{$datostipo->tipo_id}}</div>
                            </div>
                            <div class="col">
                                NOMBRE DE LA TIPO
                                <div class="btn-success shadow p-2 mb-1 rounded">{{$datostipo->tipo_descripcion}}</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                CREADO EL
                                <div class="btn-success shadow p-2 mb-1 rounded">{{$datostipo->created_at}}</div>
                            </div>
                            <div class="col">
                                ACTUALIZADO EL
                                <div class="btn-success shadow p-2 mb-1 rounded">{{$datostipo->created_at}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>--}}
            </div>
        </div>
    </div>
@endsection
@section('js_script_import')
    {{-- ################ START SCRIPTS PARA DATATABLESS ###############--}}

    {{-- ################ END SCRIPTS PARA DATATABLESS ###############--}}
@endsection

