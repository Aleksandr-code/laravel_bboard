<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardConrtroller;
use App\Http\Controllers\HomeController;
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

Route::get('/board', [BoardConrtroller::class, 'index'])->name('index');
Route::get('/board/{board}', [BoardConrtroller::class, 'detail'])->name('detail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/create', [HomeController::class, 'create'])->name('board.create');
Route::post('/home', [HomeController::class, 'store'])->name('board.store');
Route::get('/home/{board}/edit', [HomeController::class, 'edit'])->name('board.edit');
Route::patch('/home/{board}', [HomeController::class, 'update'])->name('board.update');
Route::get('/home/{board}', [HomeController::class, 'delete'])->name('board.delete');
Route::delete('/home/{board}', [HomeController::class, 'destroy'])->name('board.destroy');


