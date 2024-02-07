<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BunbouguController;

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
Route::get('/bunbougus',[BunbouguController::class,'index'])->name('bunbougus.index');
Route::get('/bunbougus/create',[BunbouguController::class,'create'])->name('bunbougus.create');
Route::post('/bunbougus/store',[BunbouguController::class,'store'])->name('bunbougus.store');
Route::get('/bunbougus/edit/{bunbougu}',[BunbouguController::class,'edit'])->name('bunbougus.edit');
Route::put('/bunbougus/edit/{bunbougu}',[BunbouguController::class,'update'])->name('bunbougus.update');
Route::get('/bunbougus/show/{bunbougu}',[BunbouguController::class,'show'])->name('bunbougus.show');
Route::delete('/bunbougus/delete/{bunbougu}',[BunbouguController::class,'destroy'])->name('bunbougus.delete');
