<?php

/* custom routes generated by CRUD */


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('autors', ['as'=> 'autors.index', 'uses' => 'AutorController@index']);
Route::post('autors', ['as'=> 'autors.store', 'uses' => 'AutorController@store']);
Route::get('autors/create', ['as'=> 'autors.create', 'uses' => 'AutorController@create']);
Route::put('autors/{autors}', ['as'=> 'autors.update', 'uses' => 'AutorController@update']);
Route::patch('autors/{autors}', ['as'=> 'autors.update', 'uses' => 'AutorController@update']);
Route::get('autors/{id}/delete', array('as' => 'autors.delete', 'uses' => 'AutorController@getDelete'));
Route::get('autors/{id}/confirm-delete', array('as' => 'autors.confirm-delete', 'uses' => 'AutorController@getModalDelete'));
Route::get('autors/{autors}', ['as'=> 'autors.show', 'uses' => 'AutorController@show']);
Route::get('autors/{autors}/edit', ['as'=> 'autors.edit', 'uses' => 'AutorController@edit']);

});


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('autors', ['as'=> 'autors.index', 'uses' => 'AutorController@index']);
Route::post('autors', ['as'=> 'autors.store', 'uses' => 'AutorController@store']);
Route::get('autors/create', ['as'=> 'autors.create', 'uses' => 'AutorController@create']);
Route::put('autors/{autors}', ['as'=> 'autors.update', 'uses' => 'AutorController@update']);
Route::patch('autors/{autors}', ['as'=> 'autors.update', 'uses' => 'AutorController@update']);
Route::get('autors/{id}/delete', array('as' => 'autors.delete', 'uses' => 'AutorController@getDelete'));
Route::get('autors/{id}/confirm-delete', array('as' => 'autors.confirm-delete', 'uses' => 'AutorController@getModalDelete'));
Route::get('autors/{autors}', ['as'=> 'autors.show', 'uses' => 'AutorController@show']);
Route::get('autors/{autors}/edit', ['as'=> 'autors.edit', 'uses' => 'AutorController@edit']);

});


Route::group(array('prefix' => 'admin/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.'), function () {

Route::get('autors', ['as'=> 'autors.index', 'uses' => 'AutorController@index']);
Route::post('autors', ['as'=> 'autors.store', 'uses' => 'AutorController@store']);
Route::get('autors/create', ['as'=> 'autors.create', 'uses' => 'AutorController@create']);
Route::put('autors/{autors}', ['as'=> 'autors.update', 'uses' => 'AutorController@update']);
Route::patch('autors/{autors}', ['as'=> 'autors.update', 'uses' => 'AutorController@update']);
Route::get('autors/{id}/delete', array('as' => 'autors.delete', 'uses' => 'AutorController@getDelete'));
Route::get('autors/{id}/confirm-delete', array('as' => 'autors.confirm-delete', 'uses' => 'AutorController@getModalDelete'));
Route::get('autors/{autors}', ['as'=> 'autors.show', 'uses' => 'AutorController@show']);
Route::get('autors/{autors}/edit', ['as'=> 'autors.edit', 'uses' => 'AutorController@edit']);

});
