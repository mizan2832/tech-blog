<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
    Route::post('category/create', [CategoryController::class,'create'])->name('category.create');
    Route::get('category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::put('category/update/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::delete('category/delete/{id}', [CategoryController::class,'destroy'])->name('category.destroy');

    Route::get('tag', [TagController::class,'index'])->name('tag.index');
    Route::post('tag/create', [TagController::class,'create'])->name('tag.create');
    Route::get('tag/edit/{id}', [TagController::class,'edit'])->name('tag.edit');
    Route::put('tag/update/{id}', [TagController::class,'update'])->name('tag.update');
    Route::delete('tag/delete/{id}', [TagController::class,'destroy'])->name('tag.destroy');

    Route::get('post',[PostController::class,'index'])->name('post.index');
    Route::get('post/create',[PostController::class,'create'])->name('post.create');


});



