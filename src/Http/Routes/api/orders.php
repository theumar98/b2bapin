<?php

Route::get('orders','OrderController@index');
Route::get('orders/{id}', 'OrderController@show');
Route::get('orders/{id}/shipments', 'OrderController@orderShipments');
Route::get('orders/{id}/items', 'OrderController@orderItems');
