<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->middleWare(['auth','admin']);

Route::get('view_product',[AdminController::class,'view_product'])->middleWare(['auth','admin']);
Route::get('add_product',[AdminController::class,'add_product'])->middleWare(['auth','admin']);
Route::post('crud_add_product',[AdminController::class,'crud_add_product'])->middleWare(['auth','admin']);
Route::get('crud_delete_product/{id}',[AdminController::class,'crud_delete_product'])->middleWare(['auth','admin']);
Route::get('crud_edit_product/{id}',[AdminController::class,'crud_edit_product'])->middleWare(['auth','admin']);
Route::post('crud_update_product/{id}',[AdminController::class,'crud_update_product'])->middleWare(['auth','admin']);
