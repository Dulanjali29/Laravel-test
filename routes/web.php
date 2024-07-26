<?php
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ContactUs\ContactUsController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[HomeController::class,'aboutUs'])->name('aboutUs');
Route::get('/contact',[ContactUsController::class,'contactUs'])->name('contactUs');
  