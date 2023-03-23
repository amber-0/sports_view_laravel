<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportsShowController;
use App\Http\Controllers\AdminSportsShowController;


// ユーザー側のコントローラー
// Route::get('/', function () {
//     return view('user_index');
// });

Route::prefix('user')
->controller(SportsShowController::class)
->name('user.')
->group(function(){
	Route::get('/', 'index')->name('index');
});


// 管理者側のコントローラー
Route::prefix('admin')
->middleware(['auth'])
->controller(AdminSportsShowController::class)
->name('admin.')
->group(function(){
	Route::get('/', 'index')->name('index');
	Route::get('/create', 'create')->name('index');
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

