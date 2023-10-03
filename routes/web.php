<?php

use App\Http\Controllers\ProdController;
use Illuminate\Support\Facades\Route;

Route::get('/product',[ProdController::class,'index'])->name('prod.index');
Route::get('/product/create',[ProdController::class,'create'])->name('prod.create');
Route::post('/product',[ProdController::class,'store'])->name('prod.store');
Route::get('/product/{product}/edit',[ProdController::class,'edit'])->name('prod.edit');
Route::put('/product/{product}/update',[ProdController::class,'update'])->name('prod.update');
Route::delete('/product/{product}/destroy',[ProdController::class,'destroy'])->name('prod.destroy');
