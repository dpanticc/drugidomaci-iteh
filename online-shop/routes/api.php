<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('vrsta', 'App\Http\Controllers\VrstaController@getAll');
Route::get('proizvod', 'App\Http\Controllers\ProizvodController@getAll');
Route::get('proizvod/{id}', 'App\Http\Controllers\ProizvodController@getById');
Route::post('proizvod', 'App\Http\Controllers\ProizvodController@save');
Route::delete('proizvod/{id}', 'App\Http\Controllers\ProizvodController@delete');

