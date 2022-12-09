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

Route::get('/',[Controller::class, 'show']);

Route::get('about', function () {
    return view('about');
    });
Route::get('blogs/{blog_id}/authors/{author_id}' , [BlogController::class, 'blogDetails'] );

Route::get('contact', [ContactController::class, 'contactDetail'])->name('contact');
