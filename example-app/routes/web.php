<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\DictionnaryController;
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
Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        // Hiển thị danh sách khách hàng
        return view('modules.customer.index');
    })->name('customer.index');

    Route::get('create', function () {
        // Hiển thị Form tạo khách hàng
        return view('modules.customer.index');
    })->name('customer.create');

    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    })->name('customer.store');

    Route::get('show/{id}', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
        return view('modules.customer.show');
    })->name('customer.show');

    Route::get('edit/{id?}', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
        return view('modules.customer.edit');
    })->name('customer.edit');

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form

    })->name('customer.update');

    Route::delete('{id/destroy}', function () {
        // Xóa thông tin dữ liệu khách hàng
        return view('modules.customer.index');
    })->name('customer.destroy');
});

Route::get('/calculator', function () {
    return view('calculator');
});
Route::post('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/dictionary', [DictionnaryController::class, 'index'])->name('dictionary');



