<?php

use App\Http\Controllers\DashboardController;
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

Route::name('ui.')->group(function () {
    Route::get('/ui/general', [GeneralController::class, 'index'])->name('general');
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    //nothing use now
});
