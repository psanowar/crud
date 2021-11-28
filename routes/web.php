<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuController;

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

Route::get('student', [StuController::class,'index']);
Route::get('add-student', [StuController::class,'create']);
Route::post('add-student', [StuController::class,'store']);
