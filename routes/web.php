<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('front.pages.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin',function(){
    return view('backend.pages.index');
})->middleware(['auth','role:admin'])->name('admin.index');

Route::middleware(['auth','role:admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('category', [CategoryController::class,'index'])->name('category.index');
    Route::get('tag', [TagController::class,'index'])->name('tag.index');
});



