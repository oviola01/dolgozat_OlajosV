<?php

use App\Http\Controllers\OutfitController;
use App\Models\Additional;
use App\Models\Bottom;
use App\Models\Upper;
use App\Models\User;
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

Route::apiResource('/users', User::class);
Route::apiResource('/uppers', Upper::class);
Route::apiResource('/bottoms', Bottom::class);
Route::apiResource('/additionals', Additional::class);

Route::get('/outfits', [OutfitController::class, 'index']);
Route::get('/outfits/{user_id}/{upper_id}/{bottom_id}', [OutfitController::class, 'show']);
Route::post('/outfits', [OutfitController::class, 'store']);
Route::delete('/outfits/{user_id}/{upper_id}/{bottom_id}', [OutfitController::class, 'destroy']);

