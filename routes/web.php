<?php

use App\Models\Loker;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PostController;
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

// Login
Route::get('/login', [LoginController::class, 'index'])
    ->middleware(['guest'])
    ->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])
    ->middleware(['guest']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])
    ->middleware(['guest'])
    ->name('register');
Route::post('/register', [RegisterController::class, 'store'])
    ->middleware(['guest']);
    
// Loker
Route::resource('loker', LokerController::class)
    ->middleware('auth');
Route::resource('company', CompanyController::class)
    ->middleware('auth');

// blog

Route::resource('post', PostController::class)
    ->middleware('auth');

Route::get('/post/{post:slug}', [PostController::class, 'slug']);
Route::get('/mypost',[PostController::class,'myposts']);

Route::get('/blog/checkSlug',[PostController::class, 'checkSlug']);
