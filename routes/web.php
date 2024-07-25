<?php

use App\Http\Controllers\Api\LandingPageController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Http\Controllers\VoyagerAuthController;
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

Route::get('/', [\App\Http\Controllers\Web\LandingPageController::class,'index'])->name('index');
Auth::routes();

Route::post("registration", [\App\Http\Controllers\Web\Auth\RegisterController::class,'register'])->name('registration');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
