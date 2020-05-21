<?php
Route::get('brands','BrandController@index');
Route::get('brands/{id}','BrandController@show');
Route::get('brands/{id}/products','BrandController@brandProducts');
Route::post('brands','BrandController@store');
Route::put('brands/{id}','BrandController@update');
Route::delete('brands/{id}','BrandController@destroy');
