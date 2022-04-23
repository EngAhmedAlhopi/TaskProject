<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
// use App\Http\Controllers\TaskController;
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

Route::get('/show/{id}',[TaskController::class,'show'])->name('show');

Route::get('tasks',[TaskController::class,'index'])->name('index');

Route::post('store',[TaskController::class,'store'])->name('store');

Route::post('destroy/{id}',[TaskController::class,'destroy'])->name('destroy');

Route::post('updatedata/{id}',[TaskController::class,'updatedata'])->name('updatedata');

Route::put('update/{id}',[TaskController::class,'update'])->name('update');

// Route::get('/app', function () {
//     return view('layouts.app');
// });
