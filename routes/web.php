<?php

Route::get('/', 'BalquimiaSiteHomeController@index') ;




Route::middleware(['AppPreventBackHistory'])->group( function(){
    Route::get ('/{any?}'             , 'BalquimiaSiteHomeController@index')->where('any','.*');
});

