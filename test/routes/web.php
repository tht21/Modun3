<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello/{name}/{age}', function ($name, $age = 0) {
    return 'he looo' . $name . 'age   :' . $age;
})->where(['name', '[A-Za-z]+', 'age' => '[0-9]+']);
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('user/{id}', [UserController::class, 'index']);
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoriesController::class, 'index']);
    Route::get('create', [CategoriesController::class, 'create']);
});
