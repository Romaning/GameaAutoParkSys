@extends('layouts.layoutmaster')
@section('title')

@endsection
@section('styles')
    <!-- Page JS Plugins CSS DATATABLES-->
@endsection
@section('hero_cuadro_bienvenida')
    <!-- Hero -->

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
            <form action="{{route('estadofunc.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            INGRESE NUEVO ESTADO PARA FUNCIONARIO
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="estado_func_descripcion">ESTADO</label>
                            <input type="text" class="form-control" id="estado_func_descripcion" name="estado_func_descripcion" placeholder="">
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
