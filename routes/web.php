<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('user/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/mycart',[UserController::class,'mycart']);
Route::get('/product',[UserController::class,'product']);
Route::get('/mycart/checkout',[UserController::class,'checkout']);

Route::post('add_order',[UserController::class,'add_order']);

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleWare(['auth','admin']);

Route::get('view_product',[AdminController::class,'view_product'])->middleWare(['auth','admin']);
Route::get('add_product',[AdminController::class,'add_product'])->middleWare(['auth','admin']);
Route::post('crud_add_product',[AdminController::class,'crud_add_product'])->middleWare(['auth','admin']);
Route::get('crud_delete_product/{id}',[AdminController::class,'crud_delete_product'])->middleWare(['auth','admin']);
Route::get('crud_edit_product/{id}',[AdminController::class,'crud_edit_product'])->middleWare(['auth','admin']);
Route::post('crud_update_product/{id}',[AdminController::class,'crud_update_product'])->middleWare(['auth','admin']);

Route::get('view_user',[AdminController::class,'view_user'])->middleWare(['auth','admin']);

Route::get('crud_user_delete/{id}',[AdminController::class,'crud_user_delete'])->middleWare(['auth','admin']);
Route::get('crud_user_edit/{id}',[AdminController::class,'crud_user_edit'])->middleWare(['auth','admin']);
Route::post('crud_user_update/{id}',[AdminController::class,'crud_user_update'])->middleWare(['auth','admin']);