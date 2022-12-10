<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
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

Route::get('/',[Controller::class, 'show'])->name('home');

Route::get('about', function () {
    return view('about');
    })->name('about');

Route::get('blogs/{blog_id}/authors/{author_id}' , [BlogController::class, 'blogDetails'] );

Route::get('contact', [ContactController::class, 'contactDetail'])->name('contact')->name('contact');

Route::get('service', function () {
    return view('service');
    })->name('service');

Route::get('blog', function () {
    return view('blog');
    })->name('blog');

Route::get('details', function () {
    return view('details');
    })->name('details');

Route::get('feature', function () {
    return view('feature');
    })->name('feature');

Route::get('quote', function () {
    return view('quote');
    })->name('quote');

Route::get('team', function () {
    return view('team');
    })->name('team');

Route::get('testimonial', function () {
    return view('testimonial');
    })->name('testimonial');
