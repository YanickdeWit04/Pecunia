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
Route::get('/add', function () {
    return view('addstatement');
});
Route::get('/addcategory', function () {
    return view('addcategory');
});
Route::post("/logout",[App\Http\Controllers\LogoutController::class,"store"])->name("logout");
Route::post("/add1",[App\Http\Controllers\BankstatementController::class,"create"]);
Route::post("/add2",[App\Http\Controllers\CategoryController::class,"create"]);

Route::resource('/home', HomeBladeController::class);
Route::resource('/account', \App\Http\Controllers\AccountBladeController::class);
Route::resource('/instellingen', \App\Http\Controllers\SettingsBladeController::class);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
