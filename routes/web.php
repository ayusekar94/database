<?php

use App\Http\Controllers\NewControler;
use Illuminate\Support\Facades\Route;
use App\Models\model1;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', [HomeControler::class,'index']);
//Route::get('/about', [NewControler::class,'about']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/pesan', [NewControler::class,'pesan']);
