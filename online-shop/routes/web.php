<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/vrsta', 'App\Http\Controllers\VrstaController@getAll');
Route::get('/vrsta/{id}', 'App\Http\Controllers\VrstaController@getById');
Route::get('/proizvod', 'App\Http\Controllers\ProizvodController@getAll');
Route::get('/proizvod/{id}', 'App\Http\Controllers\ProizvodController@getById');
Route::get('/narudzbina', 'App\Http\Controllers\NarudzbinaController@getAll');
Route::get('/narudzbina/{ime}', 'App\Http\Controllers\NarudzbinaController@getByName');





