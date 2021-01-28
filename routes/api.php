<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\PageContactController;
use App\Http\Controllers\BussinessController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\WorkplaceController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/events', EventController::class);
Route::apiResource('/vouchers', VoucherController::class);
Route::apiResource('/bussiness', BussinessController::class);
Route::apiResource('/contacts', AdminContactController::class);
Route::apiResource('/expertises', ExpertiseController::class);
Route::apiResource('/workplaces', WorkplaceController::class);