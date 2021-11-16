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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard',function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('Students', 'StudentManager@index'); // Hiển thị danh sách học sinh
    Route::get('Student/create', 'StudentManager@create'); // Thêm mới học sinh
    Route::post('Student/create', 'StudentManager@store'); // Xử lý thêm mới học sinh
    Route::get('Student/{id}/edit', 'StudentManager@edit'); // Sửa học sinh
    Route::post('Student/update', 'StudentManager@update'); // Xử lý sửa học sinh
    Route::get('Student/{id}/delete', 'StudentManager@destroy'); // Xóa học sinh
});