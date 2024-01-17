<?php

use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\BottomController;
use App\Http\Controllers\OutfitController;
use App\Http\Controllers\UpperController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/users', UserController::class);
Route::apiResource('/uppers', UpperController::class);
Route::apiResource('/bottoms', BottomController::class);
Route::apiResource('/additionals', AdditionalController::class);

Route::get('/outfits', [OutfitController::class, 'index']);
Route::get('/outfits/{user_id}/{upper_id}/{bottom_id}', [OutfitController::class, 'show']);
Route::post('/outfits', [OutfitController::class, 'store']);
Route::delete('/outfits/{user_id}/{upper_id}/{bottom_id}', [OutfitController::class, 'destroy']);

