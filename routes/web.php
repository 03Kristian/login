<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Models\Controllers\Users;
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

// Route::resource('user', UsersController::class);

Route::get('/user',[UsersController::class,'index'])->name('user');

Route::post('/login',[UsersController::class,'login'])->name('login');

Route::get('/registrar',[UsersController::class,'registrar'])->name('registrar');

Route::post('/registrarse',[UsersController::class,'registrarse'])->name('registrarse');