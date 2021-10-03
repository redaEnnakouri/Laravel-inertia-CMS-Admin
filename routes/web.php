<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneratePageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [GeneratePageController::class,'index'])->name('Welcome');

Route::group(['middleware' => ['auth:sanctum']], function () {
 
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
   
});