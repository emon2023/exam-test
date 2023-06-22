<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;



Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/home/detail/{id}',[HomeController::class,'detail'])->name('home.detail');


Route::get('/blog/add',[BlogController::class,'index'])->name('blog.add');
Route::post('/blog/create',[BlogController::class,'create'])->name('blog.create');
Route::get('/blog/manage',[BlogController::class,'manage'])->name('blog.manage');
Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('/blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
