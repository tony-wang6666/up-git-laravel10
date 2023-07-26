<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdController;
use App\Http\Controllers\mytest\CcController;

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

// Route::get('/aa',[AdController::class,'aa']);
Route::get('/cc',[CcController::class,'cc']);