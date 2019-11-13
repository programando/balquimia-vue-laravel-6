<?php

Route::get('/productos', 'ProductosController@masVendidosUltimosSesisMeses') ;



Route::middleware(['AppVerifyUserRequestJson'])->group(function () {

    Route::get('/productos/mas-vendidos', 'ProductosController@masVendidosUltimosSeisMeses') ;


    Route::get('/lineas/activas', 'MstroLineasController@LineasActivas') ;
});




 Route::middleware(['AppPreventBackHistory'])->group( function(){
     Route::get ('/{any?}'             , 'BalquimiaSiteHomeController@index')->where('any','.*');
 });

