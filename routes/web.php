<?php

use App\Http\Controllers\AdminAnggotaController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;


Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin'])->middleware('guest');
Route::get('logout', [AdminAuthController::class, 'logout'])->middleware('auth');

Route::get('/', function () {
    $data = [
        'content'   => 'admin.dashboard.index'
    ];
    return view('admin.layouts.wrapper', $data);
})->middleware('auth');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'content'   =>'admin.dashboard.index'
        ];
        return view('admin.layouts.wrapper', $data);
    });
    Route::resource('/master/anggota', AdminAnggotaController::class);
    Route::resource('/user', AdminUserController::class );
});





