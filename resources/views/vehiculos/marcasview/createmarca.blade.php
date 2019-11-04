@extends('layouts.layoutmaster')
@section('title')

@endsection
@section('styles')
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @include('components.alerts.alerttre')

    <!-- Basic -->
    <div class="block shadow p-2 mb-1 rounded">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('marca.store')}}" method="POST" enctype="multipart/form-data" {{--onsubmit="return false;"--}}>
                @csrf
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            Ingrese Marca de Vehiculo
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">Marca</label>
                            <input type="text" class="form-control" id="marcaDescripcionIdFront" name="marcaDescripcionNameFront" placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                GUARDAR
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

@endsection

