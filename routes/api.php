<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\Api\FilterController as ApiFilterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Routes that do not require authentication
Route::get('filters/{id}', [ApiFilterController::class, 'show']);

// Routes that require authentication
Route::middleware('auth:api')->group(function () {
    Route::apiResource('clients', ClientController::class);
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('filters', FilterController::class);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
