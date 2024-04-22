<?php

use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class,'index'])->name('prodcut.index');
Route::get('/create-product',[ProductController::class,'create'])->name('prodcut.create');
Route::post('/store-product',[ProductController::class,'store'])->name('prodcut.store');
