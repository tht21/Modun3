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
        echo "Hiển thị danh sách khách hàng";
    });

    Route::get('create', function () {
        // Hiển thị Form tạo khách hàng
    });

    Route::post('store', function () {
        // Xử lý lưu dữ liệu tạo khách hàng thong qua phương thức POST từ form
    });

    Route::get('{id}/show', function () {
        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
    });

    Route::get('{id}/edit', function () {
        // Hiển thị Form chỉnh sửa thông tin khách hàng
    });

    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });

    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
//    dd($request);
    if ($request->username == 'a' && $request->password == 'a') {
        return 'thanh cong';
    }
    return 'sai roi ban oi';
});
Route::get('/calculator', function () {
    return view('calculator');
});
Route::post('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::get('/dictionary', function () {
    return view('dictionary');
});
Route::post('/dictionary', [DictionnaryController::class, 'index'])->name('dictionary');

