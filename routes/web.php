<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;
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

// default
Route::get('/', function () {
    return view('welcome');
});


// test
Route::get('/hello', [MainController::class, 'test']);


// product
Route::get('/products', [ProductController::class, 'getAllProducts'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'createProduct']);
Route::get('/products/update', [ProductController::class, 'updateProduct']);
Route::get('/products/delete', [ProductController::class, 'deleteProduct']);
Route::get('/products/first_or_create', [ProductController::class, 'firstOrCreate']);
Route::get('/products/update_or_create', [ProductController::class, 'updateOrCreate']);

// base
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
