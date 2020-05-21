<?php

Route::get('shipments', 'ShipmentController@index');
Route::get('shipments/{id}', 'ShipmentController@show');
