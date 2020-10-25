<?php

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');

Route::get('/products', [App\Http\Controllers\FrontendController::class, 'show'])->name('products');

Route::get('/product/{slug}', [App\Http\Controllers\FrontendController::class, 'details'])->name('product');

Route::post('/addtocart/{id}', [App\Http\Controllers\FrontendController::class, 'addToCart'])->name('addtocart');

Route::get('/removefromcart/{id}', [App\Http\Controllers\FrontendController::class, 'removeFromCart'])->name('removefromcart');

Route::get('/cart', [App\Http\Controllers\FrontendController::class, 'cart'])->name('cart');

Route::post('/payment', [App\Http\Controllers\PaymentController::class, 'pay'])->name('pay');

Route::post('/indipay/response/success', [App\Http\Controllers\PaymentController::class, 'response'])->name('pay.response');

Route::post('/indipay/response/failure', [App\Http\Controllers\PaymentController::class, 'response'])->name('pay.response');

Route::resource('/admin/productscategory',App\Http\Controllers\ProductCategoryController::class);

Route::resource('/admin/products',App\Http\Controllers\ProductController::class);

Route::resource('/admin/productsimages',App\Http\Controllers\ProductImageController::class);

