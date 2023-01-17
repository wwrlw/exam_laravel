<?php

use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\UseController;
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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'user'], function() {
    Route::resource('places', PlaceController::class);
    Route::resource('things', ThingController::class);
    Route::resource('uses', UseController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
