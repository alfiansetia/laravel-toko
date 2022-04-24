<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('index');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/product/detail/{product}', [HomeController::class, 'productDetail'])->name('product.detail');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/galery', [HomeController::class, 'galery'])->name('galery');
Route::get('/galery/detail/{album}', [HomeController::class, 'galeryDetail'])->name('galery.detail');


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

    Route::delete('/products', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::resource('/products', ProductController::class)->except('create', 'show', 'destroy');

    Route::post('/catprod/destroyBatch', [ProductController::class, 'destroyBatch'])->name('catprod.destroy.batch');
    Route::resource('/catprod', ProductController::class)->except('create', 'show');
});
