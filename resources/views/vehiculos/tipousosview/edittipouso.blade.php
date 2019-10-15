@extends('layouts.layoutmaster')
@section('title')
    Editar Tipo Uso
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
                    FORM EDIT TIPO
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        Formulario para editar tipo_uso de Vehiculo
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
    <!-- Basic -->
    <div class="block shadow p-2 mb-1 rounded">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('tipo_uso.update',$datostipo_uso->tipo_uso_id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            Edite Tipo Uso de Vehiculo
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">TIPO</label>
                            <input type="text" class="form-control" id="tipo_usoDescripcionIdFront" name="tipo_usoDescripcionNameFront" value="{{$datostipo_uso->tipo_uso_descripcion}}">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                ENVIAR
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Basic -->
@endsection
@section('js_script_import')
    {{-- ################ START SCRIPTS PARA DATATABLESS ###############--}}

    {{-- ################ END SCRIPTS PARA DATATABLESS ###############--}}
@endsection

