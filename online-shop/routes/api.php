<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\NarudzbinaController;
use App\Http\Controllers\StavkaNarudzbineController;
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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

    Route::resource('narudzbina', NarudzbinaController::class)->only(['store','destroy']);
    Route::resource('stavkaNarudzbine', StavkaNarudzbineController::class)->only(['store', 'show']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

