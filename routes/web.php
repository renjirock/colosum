<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscountsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StoreController;

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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::post('/contact', [ContactController::class, 'index'])->name('contact_us');

Route::group(['middleware' => ['guest']], function() {

    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.post');
});

Route::group(['middleware' => ['auth'], 'prefix'=>'admin'], function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');
    Route::group(['prefix'=>'products'], function() {
        Route::get('/', [ProductsController::class, 'index'])->name('admin.products');
        Route::get('/create', [ProductsController::class, 'create'])->name('admin.products.create');
        Route::get('/edit/{id}', [ProductsController::class, 'edit'])->name('admin.products.edit');
    });
    Route::group(['prefix'=>'categories'], function() {
        Route::get('/', [CategoriesController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [CategoriesController::class, 'create'])->name('admin.categories.create');
        Route::get('/edit/{id}', [CategoriesController::class, 'edit'])->name('admin.categories.edit');
    });
    Route::group(['prefix'=>'discounts'], function() {
        Route::get('/', [DiscountsController::class, 'index'])->name('admin.discounts.index');
        Route::get('/create', [DiscountsController::class, 'create'])->name('admin.discounts.create');
        Route::get('/edit/{id}', [DiscountsController::class, 'edit'])->name('admin.discounts.edit');
    });
});

Route::group(['middleware' => ['auth']], function() {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');
});

Route::get('/item/{store}/{item}', [ItemController::class, 'index'])->name('item');

Route::get('/store/{store}', [StoreController::class, 'index'])->name('store');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
