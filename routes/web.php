<?php

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/account', function () {
    return view('account-nl');
});
Route::get('/instellingen', function () {
    return view('settings-nl');
});
Route::post("/logout",[App\Http\Controllers\LogoutController::class,"store"])->name("logout");
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




