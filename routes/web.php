<?php

use App\Models\Loker;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegisterController;

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
    return view('home',[
      'lokers' => Loker::all(),
    ]);
});

// Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);

// Route::resource('loker', LokerController::class)->middleware('auth');

// Route::resource('company', CompanyController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])
    ->middleware(['guest'])
    ->name('login');
Route::post('/login', [LoginController::class, 'aunthenticate'])
    ->middleware(['guest']);

Route::get('/register', [RegisterController::class, 'index'])
    ->middleware(['guest'])
    ->name('register');
Route::post('/register', [RegisterController::class, 'store'])
    ->middleware(['guest']);
    
Route::resource('loker', LokerController::class)
    ->middleware('auth');
Route::resource('company', CompanyController::class)
    ->middleware('auth');
