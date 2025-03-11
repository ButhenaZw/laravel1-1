<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index'); // عرض جميع المستخدمين
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // عرض الفورم
Route::post('/users', [UserController::class, 'store'])->name('users.store'); 

