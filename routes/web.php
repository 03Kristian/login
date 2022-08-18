<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Models\Controllers\Users;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PerfiljuradoController;
use App\Http\Controllers\SitioController;


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


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/chart',[PerfiljuradoController::class,'chart'])->name('chart');

Route::get('/cierresesion',[UsersController::class,'cierre'])->name('cierresesion');


Route::resource('jurado', PerfiljuradoController::class);
//
Route::resource('sitios', SitioController::class);