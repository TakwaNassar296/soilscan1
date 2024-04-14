<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApinpkdeficiencyController;
use App\Http\Controllers\passportAuthController;
use App\Http\Controllers\APINPKController;


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

Route::post('/register',[passportAuthController::class,'register']);
Route::post('/login',[passportAuthController::class,'login']);
Route::middleware(['auth:api'])->group(function () {
    Route::get('/userInfo',[passportAuthController::class,'userInfo']);
    Route::resource('/npkdeficiency', ApinpkdeficiencyController::class);
    Route::resource('/npk',APINPKController::class);
    Route::put('/npkdeficiency/update/{id}', [ApinpkdeficiencyController::class,"update"]);
    Route::get('/search/{Crop_Name}', [ApinpkdeficiencyController::class,'search']);
    Route::get('/npk/search/{Crops}', [APINPKController::class,'search']);
});
