<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportsShowController;
use App\Http\Controllers\AdminSportsShowController;



Route::prefix('user')
->controller(SportsShowController::class)
->name('user.')
->group(function(){
	Route::get('/', 'index')->name('index');
	Route::get('/mexico_vs_japan', 'mexico_vs_japan')->name('mexico_vs_japan');
	Route::get('/form', 'form')->name('form'); //createの役割
	Route::post('/', 'store')->name('store'); //ここの'/'はもしかしたら変更する必要あり？
	Route::get('/show', 'show')->name('show');

});


// 管理者側のコントローラー
// ログインのメールとpasswordはDBに直接登録しておく
Route::prefix('admin')
->middleware(['auth'])
->controller(AdminSportsShowController::class)
->name('admin.')
->group(function(){
	Route::get('/', 'index')->name('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

