<?php

use App\Http\Controllers\HomeBladeController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\PushoverHandler;

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
Route::get('/spaardoelen', function () {
    return view('savings');
});
Route::resource('/account', \App\Http\Controllers\AccountBladeController::class);
Route::resource('/instellingen', \App\Http\Controllers\SettingsBladeController::class);
Route::resource('bankstatement', \App\Http\Controllers\BankstatementController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::resource('/', \App\Http\Controllers\HomeController::class);
Auth::routes();
