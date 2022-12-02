<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;



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

Route::get('/', [HomeController::class, 'Dashboard'])->name('Dashboard')->middleware(['auth']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/add-data', [HomeController::class, 'addData'])->name('addData');

Route::post('/save-data', [PostController::class, 'saveData'])->name('saveData');
Route::get('/delete/{id}', [PostController::class, 'delete']);
Route::get('/edit/{id}', [PostController::class, 'edit'])->middleware(['auth']);
Route::post('/edit', [PostController::class, 'updateData'])->name('updateData');

Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');





