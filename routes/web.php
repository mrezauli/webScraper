<?php

use App\Http\Controllers\BDJobsTodayGovtSpiderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpidersController;

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

//Route::resource('spiders', SpidersController::class);
Route::resource('bdjobstoday', BDJobsTodayGovtSpiderController::class);
