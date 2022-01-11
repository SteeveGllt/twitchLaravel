<?php

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

Route::get('startingryry', [\App\Http\Controllers\SceneControllerRyry::class, 'startingRyry']);
Route::get('offlineryry', [\App\Http\Controllers\SceneControllerRyry::class, 'offlineRyry']);
Route::get('overlayryry', [\App\Http\Controllers\SceneControllerRyry::class, 'overlayRyry']);
Route::get('overlaychatryry', [\App\Http\Controllers\SceneControllerRyry::class, 'overlaychatRyry']);
