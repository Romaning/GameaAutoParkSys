<?php
/* PRUEBA SUBIR ARCHIVOS DE IMAGENES*/
Route::get('/indexfile', 'CarpetaControlador\BtnGeneraImgsController@index')->name('indexfile.index');
/*BTN STORE IMG 1*/
Route::post('/storeimg1', 'CarpetaControlador\BtnGeneraImgsController@storeimg1')->name('storeimg1.store');
/*btngeneraimgs BtnGeneraImgsController->storeImagesUECam*/
Route::post('/btnstoreimges', 'CarpetaControlador\BtnGeneraImgsController@storeImagesUECam')->name('btnstoreimges.store');

/*#################################################### DROPZONE #######################################################*/
Route::prefix('/dropzone')->group(function () {
    Route::get('/', 'ImageUploadController@index')->name('dropzone.index');
    /*Route::get('/create','ImageUploadController@create')->name('dropzone.create');*/
    /*Route::post('/','ImageUploadController@store')->name('dropzone.store');*/
    Route::post('/', 'ImageUploadController@storeFile')->name('dropzone.file.store');
    /*Route::get('/{asdsad}','ImageUploadControllerr@asdsad')->name('asdsad.show');
    Route::get('/{asdsad}/edit','ImageUploadController@asdsad')->name('asdsad.edit');
    Route::put('/{asdsad}','ImageUploadController@asdsad')->name('asdsad.update');
    Route::delete('/{archivo_id}','ImageUploadController@destroy')->name('dropzone.destroy');*/
    Route::post('/eliminarimagedropzone', 'ImageUploadController@fileDestroy')->name('dropzone.file.destroy');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/paginaindex', 'CarpetaControlador\ControllerRoman@index');
/*#################################################### VEHICULOS #######################################################*/
/*Route::resource('clase','ControladorVehiculo\ClaseController');*/
Route::prefix('/clase')->group(function () {
    Route::get('/', 'ControladorVehiculo\ClaseController@index')->name('clase.index');
    Route::get('/create', 'ControladorVehiculo\ClaseController@create')->name('clase.create');
    Route::post('/', 'ControladorVehiculo\ClaseController@store')->name('clase.store');
    Route::get('/{clase_id}', 'ControladorVehiculo\ClaseController@show')->name('clase.show');
    Route::get('/{clase_id}/edit', 'ControladorVehiculo\ClaseController@edit')->name('clase.edit');
    Route::put('/{clase_id}', 'ControladorVehiculo\ClaseController@update')->name('clase.update');
    Route::delete('/{clase_id}', 'ControladorVehiculo\ClaseController@destroy')->name('clase.destroy');
});

/*Route::resource('marcas','ControladorVehiculo\ClaseController');*/
Route::prefix('/marca')->group(function () {
    Route::get('/', 'ControladorVehiculo\MarcaController@index')->name('marca.index');
    Route::get('/create', 'ControladorVehiculo\MarcaController@create')->name('marca.create');
    Route::post('/', 'ControladorVehiculo\MarcaController@store')->name('marca.store');
    Route::get('/{marca_id}', 'ControladorVehiculo\MarcaController@show')->name('marca.show');
    Route::get('/{marca_id}/edit', 'ControladorVehiculo\MarcaController@edit')->name('marca.edit');
    Route::put('/{marca_id}', 'ControladorVehiculo\MarcaController@update')->name('marca.update');
    Route::delete('/{marca_id}', 'ControladorVehiculo\MarcaController@destroy')->name('marca.destroy');
});

/*Route::resource('tipo','ControladorVehiculo\TipoController');*/
Route::prefix('/tipo')->group(function () {
    Route::get('/', 'ControladorVehiculo\TipoController@index')->name('tipo.index');
    Route::get('/create', 'ControladorVehiculo\TipoController@create')->name('tipo.create');
    Route::post('/', 'ControladorVehiculo\TipoController@store')->name('tipo.store');
    Route::get('/{tipo_id}', 'ControladorVehiculo\TipoController@show')->name('tipo.show');
    Route::get('/{tipo_id}/edit', 'ControladorVehiculo\TipoController@edit')->name('tipo.edit');
    Route::put('/{tipo_id}', 'ControladorVehiculo\TipoController@update')->name('tipo.update');
    Route::delete('/{tipo_id}', 'ControladorVehiculo\TipoController@destroy')->name('tipo.destroy');
});

/*Route::resource('tipocombustible','ControladorVehiculo\TipoCombustibleController');*/
Route::prefix('/tipocombustible')->group(function () {
    Route::get('/', 'ControladorVehiculo\TipoCombustibleController@index')->name('tipo_combustible.index');
    Route::get('/create', 'ControladorVehiculo\TipoCombustibleController@create')->name('tipo_combustible.create');
    Route::post('/', 'ControladorVehiculo\TipoCombustibleController@store')->name('tipo_combustible.store');
    Route::get('/{tipo_combustible_id}', 'ControladorVehiculo\TipoCombustibleController@show')->name('tipo_combustible.show');
    Route::get('/{tipo_combustible_id}/edit', 'ControladorVehiculo\TipoCombustibleController@edit')->name('tipo_combustible.edit');
    Route::put('/{tipo_combustible_id}', 'ControladorVehiculo\TipoCombustibleController@update')->name('tipo_combustible.update');
    Route::delete('/{tipo_combustible_id}', 'ControladorVehiculo\TipoCombustibleController@destroy')->name('tipo_combustible.destroy');
});

/*Route::resource('tipouso','ControladorVehiculo\TipoUsoController');*/
Route::prefix('/tipouso')->group(function () {
    Route::get('/', 'ControladorVehiculo\TipoUsoController@index')->name('tipo_uso.index');
    Route::get('/create', 'ControladorVehiculo\TipoUsoController@create')->name('tipo_uso.create');
    Route::post('/', 'ControladorVehiculo\TipoUsoController@store')->name('tipo_uso.store');
    Route::get('/{tipo_uso_id}', 'ControladorVehiculo\TipoUsoController@show')->name('tipo_uso.show');
    Route::get('/{tipo_uso_id}/edit', 'ControladorVehiculo\TipoUsoController@edit')->name('tipo_uso.edit');
    Route::put('/{tipo_uso_id}', 'ControladorVehiculo\TipoUsoController@update')->name('tipo_uso.update');
    Route::delete('/{tipo_uso_id}', 'ControladorVehiculo\TipoUsoController@destroy')->name('tipo_uso.destroy');
});

/*Route::resource('estado','ControladorVehiculo\EstadoServicioController');*/
Route::prefix('/estado')->group(function () {
    Route::get('/', 'ControladorVehiculo\EstadoServiceController@index')->name('estado.index');
    Route::get('/create', 'ControladorVehiculo\EstadoServiceController@create')->name('estado.create');
    Route::post('/', 'ControladorVehiculo\EstadoServiceController@store')->name('estado.store');
    Route::get('/{estado_id}', 'ControladorVehiculo\EstadoServiceController@show')->name('estado.show');
    Route::get('/{estado_id}/edit', 'ControladorVehiculo\EstadoServiceController@edit')->name('estado.edit');
    Route::put('/{estado_id}', 'ControladorVehiculo\EstadoServiceController@update')->name('estado.update');
    Route::delete('/{estado_id}', 'ControladorVehiculo\EstadoServiceController@destroy')->name('estado.destroy');
});


/*Route::resource('vehiculo','ControladorVehiculo\VehiculoController');*/
Route::prefix('/vehiculo')->group(function () {
    Route::get('/', 'ControladorVehiculo\VehiculoController@index')->name('vehiculo.index');                    /*##bien exclusive##*/
    Route::get('/create', 'ControladorVehiculo\VehiculoController@create')->name('vehiculo.create');            /*##bien exclusive##*/
    Route::post('/', 'ControladorVehiculo\VehiculoController@store')->name('vehiculo.store');                   /*##bien exclusive##*/
    Route::get('/{vehiculo_id}', 'ControladorVehiculo\VehiculoController@show')->name('vehiculo.show');
    Route::get('/{vehiculo_id}/edit', 'ControladorVehiculo\VehiculoController@edit')->name('vehiculo.edit');
    Route::put('/{vehiculo_id}', 'ControladorVehiculo\VehiculoController@update')->name('vehiculo.update');
    Route::delete('/{vehiculo_id}', 'ControladorVehiculo\VehiculoController@destroy')->name('vehiculo.destroy');
    /*#################################################################################################################################*/
    Route::get('/{vehiculo_id}/showedit', 'ControladorVehiculo\VehiculoController@showEdit')->name('vehiculo.showedit');
    /*#################################################################################################################################*/
    Route::get('/{vehiculo_id}/editsolo', 'ControladorVehiculo\VehiculoController@editSolo')->name('vehiculo.editsolo');              /*##bien##*/
    Route::put('/{vehiculo_id}', 'ControladorVehiculo\VehiculoController@updateSolo')->name('vehiculo.updatesolo');                   /*##bien##*/
    /*Route::delete('/{vehiculo_id}','ControladorVehiculo\VehiculoController@destroySolo')->name('vehiculo.destroysolo');*/              /*##bien##*/
    /*#################################################################################################################################*/
});

/*Route::resource('estservvehi','ControladorVehiculo\EstadoServicioVehiculoController');*/
Route::prefix('/estservvehi')->group(function () {
    Route::get('/', 'ControladorVehiculo\EstadoServicioVehiculoController@index')->name('estservvehi.index');                        /*##bien exclusive##*/
    Route::get('/create', 'ControladorVehiculo\EstadoServicioVehiculoController@create')->name('estservvehi.create');                /*##bien exclusive##*/
    Route::post('/', 'ControladorVehiculo\EstadoServicioVehiculoController@store')->name('estservvehi.store');                       /*##bien exclusive##*/
    Route::get('/{estservvehi_id}', 'ControladorVehiculo\EstadoServicioVehiculoController@show')->name('estservvehi.show');
    Route::get('/{estservvehi_id}/edit', 'ControladorVehiculo\EstadoServicioVehiculoController@edit')->name('estservvehi.edit');
    Route::put('/{estservvehi_id}/', 'ControladorVehiculo\EstadoServicioVehiculoController@update')->name('estservvehi.update');

    Route::delete('/{estservvehi_id}', 'ControladorVehiculo\EstadoServicioVehiculoController@destroy')->name('estservvehi.destroy');
    /*#################################################################################################################################*/
    Route::get('{placa_id}/register', 'ControladorVehiculo\EstadoServicioVehiculoController@registerSolo')->name('estservvehi.registrarsolo'); /*#### bien ####*/
    Route::post('/store', 'ControladorVehiculo\EstadoServicioVehiculoController@storeSolo')->name('estservvehi.storesolo');                         /*#### bien ####*/
    /*#################################################################################################################################*/

});

/*Route::resource('documentospropiedadvehiculo','ControladorVehiculo\DocumentosPropiedadVehiculoController');*/
Route::prefix('/documentospropiedadvehiculo')->group(function () {
    Route::get('/', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@index')->name('documentospropiedadvehiculo.index');
    Route::get('/create', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@create')->name('documentospropiedadvehiculo.create');
    Route::post('/', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@store')->name('documentospropiedadvehiculo.store');
    Route::get('/{documentospropiedadvehiculo_id}', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@show')->name('documentospropiedadvehiculo.show');
    Route::get('/{documentospropiedadvehiculo_id}/edit', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@edit')->name('documentospropiedadvehiculo.edit');
    Route::put('/{documentospropiedadvehiculo_id}', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@update')->name('documentospropiedadvehiculo.update');
    Route::delete('/{documentospropiedadvehiculo_id}', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@destroy')->name('documentospropiedadvehiculo.destroy');

    /*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
    Route::get('/{documentospropiedadvehiculo_id}/editsolo', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@editSolo')->name('documentospropiedadvehiculo.editsolo');
    Route::post('/docspropautocomplet', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@autocompletarDocsProp')->name('docsprop.autocomplet');
    /*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/

    /*solo esta linea se usa para guardar files*/
    Route::post('/storefiles', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@storeFileMethodStyde')->name('docsprop.storefilemet');
    /*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
    Route::post('/docspropstorefile','ControladorVehiculo\DocumentosPropiedadVehiculoController@storeFile')->name('docsprop.storefile');
    Route::post('/docspropdeletefile', 'ControladorVehiculo\DocumentosPropiedadVehiculoController@fileDestroy')->name('docsprop.deletefile');
    /*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
    Route::post('/consulta', 'ControladorVehiculo\EstadoServicioVehiculoController@consultaUltimoEstado')->name('estservvehi.consulta');

});

/**/
Route::prefix('/imagenesperfilvehiculo')->group(function () {
    Route::post('/storefile', 'ControladorVehiculo\ImagenesPerfilVehiculoController@storeFileMethodStyde')->name('imgsperfil.storefilemet');

    Route::get('/', 'ControladorVehiculo\ImagenesPerfilVehiculoController@index')->name('imgsperfil.index');

    Route::get('/{imgsperfil_id}/editsolo', 'ControladorVehiculo\ImagenesPerfilVehiculoController@editSolo')->name('imgsperfil.editsolo');
    Route::post('/imgsperfilautocomplet', 'ControladorVehiculo\ImagenesPerfilVehiculoController@autocompletarImgsPerfil')->name('imgsperfil.autocomplet');
    /*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
    Route::post('/imgsperfilstorefile','ControladorVehiculo\ImagenesPerfilVehiculoController@storeFile')->name('imgsperfil.storefile');
    Route::post('/imgsperfildeletefile', 'ControladorVehiculo\ImagenesPerfilVehiculoController@fileDestroy')->name('imgsperfil.deletefile');
    /*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
});

/*Route::resource('documentosrenovablevehiculo','ControladorVehiculo\DocumentosRenovableVehiculoController');*/
Route::prefix('/documentosrenovablevehiculo')->group(function () {
    Route::get('/', 'ControladorVehiculo\DocumentosRonovableVehiculoController@index')->name('docsrenov.index');
    Route::get('/create', 'ControladorVehiculo\DocumentosRonovableVehiculoController@create')->name('docsrenov.create');
    Route::post('/', 'ControladorVehiculo\DocumentosRonovableVehiculoController@store')->name('docsrenov.store');
    Route::get('/{documentosrenovablevehiculo_id}', 'ControladorVehiculo\DocumentosRonovableVehiculoController@show')->name('docsrenov.show');
    Route::get('/{documentosrenovablevehiculo_id}/edit', 'ControladorVehiculo\DocumentosRonovableVehiculoController@edit')->name('docsrenov.edit');
    Route::put('/{documentosrenovablevehiculo_id}', 'ControladorVehiculo\DocumentosRonovableVehiculoController@update')->name('docsrenov.update');
    Route::delete('/{documentosrenovablevehiculo_id}', 'ControladorVehiculo\DocumentosRonovableVehiculoController@destroy')->name('docsrenov.destroy');
    /*Route::post('/docsrenovautocomplet', 'ControladorVehiculo\DocumentosRonovableVehiculoController@autocompletarDocsRenov')->name('docsrenov.autocomplet');*/
    Route::get('/{vehiculo_id}/historial', 'ControladorVehiculo\DocumentosRonovableVehiculoController@historialPlaca')->name('docsrenov.historial.placa');
    Route::get('/{vehiculo_id}/registrar', 'ControladorVehiculo\DocumentosRonovableVehiculoController@registrarSolo')->name('docsrenov.registrarsolo');

});

/*Route::resource('seguro','ControladorVehiculo\SeguroController');*/
Route::prefix('/seguro')->group(function () {
    Route::get('/', 'ControladorVehiculo\SeguroController@index')->name('seguro.index');
    Route::get('/create', 'ControladorVehiculo\SeguroController@create')->name('seguro.create');
    Route::post('/store', 'ControladorVehiculo\SeguroController@store')->name('seguro.store');
    Route::get('/{seguro_id}', 'ControladorVehiculo\SeguroController@show')->name('seguro.show');
    Route::get('/{seguro_id}/edit', 'ControladorVehiculo\SeguroController@edit')->name('seguro.edit');
    Route::put('/{seguro_id}', 'ControladorVehiculo\SeguroController@update')->name('seguro.update');
    Route::delete('/{seguro_id}', 'ControladorVehiculo\SeguroController@destroy')->name('seguro.destroy');

    Route::get('/{vehiculo_id}/historial', 'ControladorVehiculo\SeguroController@historialSeguros')->name('seguro.historial.placa');
    Route::post('/{seguro_id}/update', 'ControladorVehiculo\SeguroController@updateClasis')->name('seguro.update.clasic');

});


/*#################################################### VEHICULOS #######################################################*/
