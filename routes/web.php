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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('awal');
// });

Route::get('/', 'PAGE_control@home');

Route::get('/tampil', 'CRUD_control@index');
Route::get('/tambah/create', 'CRUD_control@create');
Route::get('/edit', 'CRUD_control@edit');
Route::get('/detail/{cRUD_model}', 'CRUD_control@show');
Route::post('/tambah', 'CRUD_control@store');
