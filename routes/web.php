<?php

use Illuminate\Support\Facades\Route;
 Use \App\Http\Controllers\GenericController;

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


Route::get('/', [GenericController::class, 'landing']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
