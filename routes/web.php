<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
//&Login/register
Route::get('/', [UserController::class,'home'])->name('login');
Route::get('/register', [UserController::class,'registerView']);
Route::post('/register', [UserController::class,'register']);

Route::get('/login', [UserController::class,'loginView']);
Route::post('/login', [UserController::class,'login']);

Route::post('/logout', [UserController::class, 'logout']);

//& Product

Route::get('/main', [ProductController::class,'main'])->name('user.main');
Route::get('/create',[ProductController::class,'create'])->name('product.create');
Route::post('/create',[ProductController::class,'store'])->name('product.store');


