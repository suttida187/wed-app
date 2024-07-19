<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
}); //href="{{url('/')}}" ใช้กับ route ที่มี หรือ ไม่มี ->name('blog');

Route::get('blog',[AdminController::class,'index'])->name('blog');
Route::get('about',[AdminController::class,'about'])->name('about');
Route::get('create',[AdminController::class,'create']);
Route::post('insert',[AdminController::class,'insert']);