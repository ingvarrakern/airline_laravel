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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin-pilot', [App\Http\Controllers\PilotController::class, 'create'])->name('formcreatepilot');
Route::post('/save-pilot', [App\Http\Controllers\PilotController::class, 'store'])->name('savepilot'); 


Route::get('/admin-road', [App\Http\Controllers\RoadController::class, 'create'])->name('formcreateroad');
Route::post('/save-road', [App\Http\Controllers\RoadController::class, 'store'])->name('saveroad'); 

Route::get('/admin-aircraft', [App\Http\Controllers\AircraftController::class, 'create'])->name('formcreateaircraft');
Route::post('/save-aircraft', [App\Http\Controllers\AircraftController::class, 'store'])->name('saveaircraft'); 
