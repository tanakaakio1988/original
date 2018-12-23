<?php


Route::group(['middleware' => ['web']], function() {
    Route::auth();

    Route::get('/', 'OriginalsController@index');

    Route::get('/original', 'OriginalsController@index');

    Route::get('/original/create','OriginalsController@create');

    Route::post('/original', 'OriginalsController@store');

    Route::get('/original/{original_id}/edit', 'OriginalsController@edit');

    Route::patch('/original/{original_id}', 'OriginalsController@update');

    Route::get('/original/{id}/delete', 'OriginalsController@destroy');

    Route::get('/users/{id}', 'UsersController@show');
});