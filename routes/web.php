<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SuratController@index')->name('index');
Route::get('/store', 'SuratController@store')->name('index');
Route::get('/data-unit', 'SuratController@data_unit')->name('data-unit');

// Route::get('/', function () {
//     $unit_kerja = UnitKerja::all();
//     return view('index', compact('unit_kerja'));
// });
