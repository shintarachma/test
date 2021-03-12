<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'StockController@index');
Route::get('/home', 'StockController@index');


Route::get('/stock/create', 'StockController@create');
Route::post('/stock/store', 'StockController@store');
Route::post('/items/get-name', 'StockController@getItemName');


Route::get('/history', 'TransactionController@index');
Route::get('/history/printPDF', 'TransactionController@print_pdf');

Route::get('/history', 'ExcelController@index');
Route::get('/history/printXLSX', 'ExcelController@print_xlsx');

Auth::routes();

Route::get('/reduce', 'StockController@delete');
