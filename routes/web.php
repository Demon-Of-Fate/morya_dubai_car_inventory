<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
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

Route::get('/',[HomeController::class,'Home']);

Route::get('/contact',function(){
    return view('pages.contact');
})->name("contactPage");

Route::get('/test',function(){
    return view('layout.user_layout');
});

Route::get('/collection', [HomeController::class, 'Collection'])->name('collection');

Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/faq', [FaqController::class, 'faq'])->name('faq');