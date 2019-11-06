<?php

Route::get('/', 'BalquimiaSiteHomeController@index') ;


Route::middleware(['AppVerifyUserRequestJson'])->group(function () {
    Route::get('/lineas/activas', 'MstroLineasController@LineasActivas') ;
});




Route::middleware(['AppPreventBackHistory'])->group( function(){
    Route::get ('/{any?}'             , 'BalquimiaSiteHomeController@index')->where('any','.*');
});

