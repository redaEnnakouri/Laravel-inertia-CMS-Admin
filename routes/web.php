<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UI\ButtonController;
use App\Http\Controllers\UI\GeneralController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('dashboard');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::name('ui.')->prefix('ui')->group(function () {
    Route::get('/general', [GeneralController::class, 'index'])->name('general');
    Route::get('/buttons', [ButtonController::class, 'index'])->name('button');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    //nothing use now
});
