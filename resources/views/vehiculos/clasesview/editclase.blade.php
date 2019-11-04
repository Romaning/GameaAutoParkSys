@extends('layouts.layoutmaster')
@section('title')

@endsection
@section('styles')
@endsection
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @include('components.alerts.alerttre')

    <div class="block shadow p-2 mb-1 rounded">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('clase.update',$datosclase->clase_id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            Edite Clase de Vehiculo
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">Clase</label>
                            <input type="text" class="form-control" id="claseDescripcionIdFront" name="claseDescripcionNameFront" value="{{$datosclase->clase_descripcion}}">
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

@endsection
@section('js_script_import')

@endsection

