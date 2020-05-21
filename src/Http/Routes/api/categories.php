<?php
Route::get('categories','CategoryController@index');
Route::get('categories/{id}','CategoryController@show');
Route::get('categories/{id}/products','CategoryController@categoryProducts');
Route::post('categories','CategoryController@store');
Route::put('categories/{id}','CategoryController@update');
Route::delete('categories/{id}','CategoryController@destroy');
