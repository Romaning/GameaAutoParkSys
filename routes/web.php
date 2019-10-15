<?php
/* PRUEBA SUBIR ARCHIVOS DE IMAGENES*/
Route::get('/indexfile','CarpetaControlador\BtnGeneraImgsController@index')->name('indexfile.index');
/*BTN STORE IMG 1*/
Route::post('/storeimg1','CarpetaControlador\BtnGeneraImgsController@storeimg1')->name('storeimg1.store');
/*btngeneraimgs BtnGeneraImgsController->storeImagesUECam*/
Route::post('/btnstoreimges','CarpetaControlador\BtnGeneraImgsController@storeImagesUECam')->name('btnstoreimges.store');

/*#################################################### DROPZONE #######################################################*/
Route::prefix('/dropzone')->group(function(){
    Route::get('/','ImageUploadController@index')->name('dropzone.index');
    /*Route::get('/create','ImageUploadController@create')->name('dropzone.create');*/
    /*Route::post('/','ImageUploadController@store')->name('dropzone.store');*/
    Route::post('/','ImageUploadController@storeFile')->name('dropzone.file.store');
    /*Route::get('/{asdsad}','ImageUploadControllerr@asdsad')->name('asdsad.show');
    Route::get('/{asdsad}/edit','ImageUploadController@asdsad')->name('asdsad.edit');
    Route::put('/{asdsad}','ImageUploadController@asdsad')->name('asdsad.update');
    Route::delete('/{archivo_id}','ImageUploadController@destroy')->name('dropzone.destroy');*/
    Route::post('/eliminarimagedropzone','ImageUploadController@fileDestroy')->name('dropzone.file.destroy');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/paginaindex', 'CarpetaControlador\ControllerRoman@index');
/*#################################################### VEHICULOS #######################################################*/
/*Route::resource('clase','ControladorVehiculo\ClaseController');*/
Route::prefix('/clase')->group(function(){
    Route::get('/','ControladorVehiculo\ClaseController@index')->name('clase.index');
    Route::get('/create','ControladorVehiculo\ClaseController@create')->name('clase.create');
    Route::post('/','ControladorVehiculo\ClaseController@store')->name('clase.store');
    Route::get('/{clase_id}','ControladorVehiculo\ClaseController@show')->name('clase.show');
    Route::get('/{clase_id}/edit','ControladorVehiculo\ClaseController@edit')->name('clase.edit');
    Route::put('/{clase_id}','ControladorVehiculo\ClaseController@update')->name('clase.update');
    Route::delete('/{clase_id}','ControladorVehiculo\ClaseController@destroy')->name('clase.destroy');
});

/*Route::resource('marcas','ControladorVehiculo\ClaseController');*/
Route::prefix('/marca')->group(function(){
    Route::get('/','ControladorVehiculo\MarcaController@index')->name('marca.index');
    Route::get('/create','ControladorVehiculo\MarcaController@create')->name('marca.create');
    Route::post('/','ControladorVehiculo\MarcaController@store')->name('marca.store');
    Route::get('/{marca_id}','ControladorVehiculo\MarcaController@show')->name('marca.show');
    Route::get('/{marca_id}/edit','ControladorVehiculo\MarcaController@edit')->name('marca.edit');
    Route::put('/{marca_id}','ControladorVehiculo\MarcaController@update')->name('marca.update');
    Route::delete('/{marca_id}','ControladorVehiculo\MarcaController@destroy')->name('marca.destroy');
});

/*Route::resource('tipo','ControladorVehiculo\TipoController');*/
Route::prefix('/tipo')->group(function(){
    Route::get('/','ControladorVehiculo\TipoController@index')->name('tipo.index');
    Route::get('/create','ControladorVehiculo\TipoController@create')->name('tipo.create');
    Route::post('/','ControladorVehiculo\TipoController@store')->name('tipo.store');
    Route::get('/{tipo_id}','ControladorVehiculo\TipoController@show')->name('tipo.show');
    Route::get('/{tipo_id}/edit','ControladorVehiculo\TipoController@edit')->name('tipo.edit');
    Route::put('/{tipo_id}','ControladorVehiculo\TipoController@update')->name('tipo.update');
    Route::delete('/{tipo_id}','ControladorVehiculo\TipoController@destroy')->name('tipo.destroy');
});

/*Route::resource('tipocombustible','ControladorVehiculo\TipoCombustibleController');*/
Route::prefix('/tipocombustible')->group(function(){
    Route::get('/','ControladorVehiculo\TipoCombustibleController@index')->name('tipo_combustible.index');
    Route::get('/create','ControladorVehiculo\TipoCombustibleController@create')->name('tipo_combustible.create');
    Route::post('/','ControladorVehiculo\TipoCombustibleController@store')->name('tipo_combustible.store');
    Route::get('/{tipo_combustible_id}','ControladorVehiculo\TipoCombustibleController@show')->name('tipo_combustible.show');
    Route::get('/{tipo_combustible_id}/edit','ControladorVehiculo\TipoCombustibleController@edit')->name('tipo_combustible.edit');
    Route::put('/{tipo_combustible_id}','ControladorVehiculo\TipoCombustibleController@update')->name('tipo_combustible.update');
    Route::delete('/{tipo_combustible_id}','ControladorVehiculo\TipoCombustibleController@destroy')->name('tipo_combustible.destroy');
});

/*Route::resource('tipouso','ControladorVehiculo\TipoUsoController');*/
Route::prefix('/tipouso')->group(function(){
    Route::get('/','ControladorVehiculo\TipoUsoController@index')->name('tipo_uso.index');
    Route::get('/create','ControladorVehiculo\TipoUsoController@create')->name('tipo_uso.create');
    Route::post('/','ControladorVehiculo\TipoUsoController@store')->name('tipo_uso.store');
    Route::get('/{tipo_uso_id}','ControladorVehiculo\TipoUsoController@show')->name('tipo_uso.show');
    Route::get('/{tipo_uso_id}/edit','ControladorVehiculo\TipoUsoController@edit')->name('tipo_uso.edit');
    Route::put('/{tipo_uso_id}','ControladorVehiculo\TipoUsoController@update')->name('tipo_uso.update');
    Route::delete('/{tipo_uso_id}','ControladorVehiculo\TipoUsoController@destroy')->name('tipo_uso.destroy');
});

/*Route::resource('vehiculo','ControladorVehiculo\VehiculoController');*/
Route::prefix('/vehiculo')->group(function(){
    Route::get('/','ControladorVehiculo\VehiculoController@index')->name('vehiculo.index');
    Route::get('/create','ControladorVehiculo\VehiculoController@create')->name('vehiculo.create');
    Route::post('/','ControladorVehiculo\VehiculoController@store')->name('vehiculo.store');
    Route::get('/{vehiculo_id}','ControladorVehiculo\VehiculoController@show')->name('vehiculo.show');
    Route::get('/{vehiculo_id}/edit','ControladorVehiculo\VehiculoController@edit')->name('vehiculo.edit');
    Route::put('/{vehiculo_id}','ControladorVehiculo\VehiculoController@update')->name('vehiculo.update');
    Route::delete('/{vehiculo_id}','ControladorVehiculo\VehiculoController@destroy')->name('vehiculo.destroy');

});



/*Route::resource('documentospropiedadvehiculo','ControladorVehiculo\DocumentosPropiedadVehiculoController');*/
Route::prefix('/documentospropiedadvehiculo')->group(function(){
    Route::get('/','ControladorVehiculo\DocumentosPropiedadVehiculoController@index')->name('documentospropiedadvehiculo.index');
    Route::get('/create','ControladorVehiculo\DocumentosPropiedadVehiculoController@create')->name('documentospropiedadvehiculo.create');
    Route::post('/','ControladorVehiculo\DocumentosPropiedadVehiculoController@store')->name('documentospropiedadvehiculo.store');
    Route::get('/{documentospropiedadvehiculo_id}','ControladorVehiculo\DocumentosPropiedadVehiculoController@show')->name('documentospropiedadvehiculo.show');
    Route::get('/{documentospropiedadvehiculo_id}/edit','ControladorVehiculo\DocumentosPropiedadVehiculoController@edit')->name('documentospropiedadvehiculo.edit');
    Route::put('/{documentospropiedadvehiculo_id}','ControladorVehiculo\DocumentosPropiedadVehiculoController@update')->name('documentospropiedadvehiculo.update');
    Route::delete('/{documentospropiedadvehiculo_id}','ControladorVehiculo\DocumentosPropiedadVehiculoController@destroy')->name('documentospropiedadvehiculo.destroy');
    /*solo esta linea se usa para guardar files*/
    Route::post('/storefile','ControladorVehiculo\DocumentosPropiedadVehiculoController@storeFileMethodStyde')->name('docsprop.storefile');
    /*Route::post('/storefile','ControladorVehiculo\DocumentosPropiedadVehiculoController@storeFile')->name('docsprop.storefile');*/
    Route::post('/deletefile','ControladorVehiculo\DocumentosPropiedadVehiculoController@fileDestroy')->name('docsprop.deletefile');
});

/*Route::resource('documentosrenovablevehiculo','ControladorVehiculo\DocumentosRenovableVehiculoController');*/
Route::prefix('/documentosrenovablevehiculo')->group(function(){
    Route::get('/','ControladorVehiculo\DocumentosRenovableVehiculoController@index')->name('documentosrenovablevehiculo.index');
    Route::get('/create','ControladorVehiculo\DocumentosRenovableVehiculoController@create')->name('documentosrenovablevehiculo.create');
    Route::post('/','ControladorVehiculo\DocumentosRonovableVehiculoController@store')->name('documentosrenovablevehiculo.store');
    Route::get('/{documentosrenovablevehiculo_id}','ControladorVehiculo\DocumentosRenovableVehiculoController@show')->name('documentosrenovablevehiculo.show');
    Route::get('/{documentosrenovablevehiculo_id}/edit','ControladorVehiculo\DocumentosRenovableVehiculoController@edit')->name('documentosrenovablevehiculo.edit');
    Route::put('/{documentosrenovablevehiculo_id}','ControladorVehiculo\DocumentosRenovableVehiculoController@update')->name('documentosrenovablevehiculo.update');
    Route::delete('/{documentosrenovablevehiculo_id}','ControladorVehiculo\DocumentosRenovableVehiculoController@destroy')->name('documentosrenovablevehiculo.destroy');

    Route::post('/docsrenovautocomplet','ControladorVehiculo\DocumentosRonovableVehiculoController@autocompletarDocsRenov')->name('docsrenov.autocomplet');
});

/*Route::resource('seguro','ControladorVehiculo\SeguroController');*/
Route::prefix('/seguro')->group(function(){
    Route::get('/','ControladorVehiculo\SeguroController@index')->name('seguro.index');
    Route::get('/create','ControladorVehiculo\SeguroController@create')->name('seguro.create');
    Route::post('/','ControladorVehiculo\SeguroController@store')->name('seguro.store');
    Route::get('/{seguro_id}','ControladorVehiculo\SeguroController@show')->name('seguro.show');
    Route::get('/{seguro_id}/edit','ControladorVehiculo\SeguroController@edit')->name('seguro.edit');
    Route::put('/{seguro_id}','ControladorVehiculo\SeguroController@update')->name('seguro.update');
    Route::delete('/{seguro_id}','ControladorVehiculo\SeguroController@destroy')->name('seguro.destroy');
});

Route::prefix('/imagenesperfilvehiculo')->group(function(){
    Route::post('/storefile','ControladorVehiculo\ImagenesPerfilVehiculoController@storeFileMethodStyde')->name('imgsperfil.storefile');
});
/*#################################################### VEHICULOS #######################################################*/
