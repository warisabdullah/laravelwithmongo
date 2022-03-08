<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get('products', [ProductsController::class, 'index']);
Route::post('create/product', [ProductsController::class, 'store']);
Route::get('edit/product', [ProductsController::class, 'edit']);
Route::post('update/product', [ProductsController::class, 'update']);
Route::get('delete/product', [ProductsController::class, 'destroy']);
