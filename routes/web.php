<?php

use App\Http\Controllers\npkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\npkdeficiencyController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',function(){
    return redirect()->route('npkdeficiency.index');
});
Route::get('/home',function(){
    return redirect()->route('npkdeficiency.index');
});
