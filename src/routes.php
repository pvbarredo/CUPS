<?php


Route::get('cups/getPrinters', 'Pvbarredo\CUPS\CupsController@getPrinters');
Route::get('cups/print', 'Pvbarredo\CUPS\CupsController@print');