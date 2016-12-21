<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BandController@index');

// bands

Route::get('band/create', [
    'uses' => 'BandController@create',
    'as'   => 'create-band'
]);

Route::post('band/create', [
    'uses' => 'BandController@store',
     'as'  => 'store-band'
]);

Route::get('band/{id}/edit', [
    'uses'  => 'BandController@edit',
     'as'   => 'edit-band'
]);

Route::post('band/{id}/update', [
    'uses' => 'BandController@update',
    'as'   => 'update-band'
]);


Route::get('band/{id}/delete', [
    'uses' => 'BandController@destroy',
    'as'   => 'delete-band'    
]);

Route::get('band/{id}', [
   'uses'  => 'BandController@show',
   'as'    => 'show-band'
]);



// albums
Route::get('albums', 'AlbumController@index');

Route::get('album/create', [
    'uses' => 'AlbumController@create',
    'as'   => 'create-album'
]);

Route::post('album/create', [
    'uses'  => 'AlbumController@store',
    'as'    => 'store-album'
]);

Route::get('album/{id}/edit', [
    'uses' => 'AlbumController@edit',
    'as'   => 'edit-album'
]);

Route::post('album/{id}/update', [
    'uses' => 'AlbumController@update',
    'as'   => 'update-album'
    
]);


Route::get('album/{id}/delete', [
   'uses'  => 'AlbumController@destroy',
   'as'    => 'delete-album'
]);

Route::get('album/{id}', [
    'uses'  => 'AlbumController@show',
    'as'    => 'show-album'
]);