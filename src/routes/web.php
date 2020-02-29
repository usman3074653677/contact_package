<?php


Route::group(['namespace'=>'Usman\Contact\Http\Controllers'], function (){

    Route::get('/contact','ContactController@index')->name('contact');
    Route::post('/submit','ContactController@submit')->name('submit');

});
