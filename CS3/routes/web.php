<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\CategoryController as WebCategoryController;

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


Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth']
], function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('categories', CategoryController::class);
    Route::prefix('/categories')->group(function () {
        Route::get('/active/{id}', [CategoryController::class, 'active'])->name('categories.active');
        Route::get('/unactive/{id}', [CategoryController::class, 'unactive'])->name('categories.unactive');
    });


    Route::resource('brands', BrandController::class);
    Route::prefix('/brands')->group(function () {
        Route::get('/active/{id}', [BrandController::class, 'active'])->name('brands.active');
        Route::get('/unactive/{id}', [BrandController::class, 'unactive'])->name('brands.unactive');
    });

    Route::resource('products', ProductController::class);
    Route::prefix('/products')->group(function () {
        Route::get('/active/{id}', [ProductController::class, 'active'])->name('products.active');
        Route::get('/unactive/{id}', [ProductController::class, 'unactive'])->name('products.unactive');
    });

    Route::resource('users', UserController::class);

    Route::resource('roles', RoleController::class);


});
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginAdmin'])->name('login.loginAdmin');

Route::group(['prefix' => 'frontend'], function () {
    Route::resource('home', HomeController::class);
    Route::get('/category/{slug}/{id}', [WebCategoryController::class,'index'])->name('category.product');

});



