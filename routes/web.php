<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogcategoriesController;
use App\Http\Controllers\BlogsController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'blogcategories',
], function () {
    Route::get('/', [BlogcategoriesController::class, 'index'])
         ->name('blogcategories.blogcategory.index');
    Route::get('/create', [BlogcategoriesController::class, 'create'])
         ->name('blogcategories.blogcategory.create');
    Route::get('/show/{blogcategory}',[BlogcategoriesController::class, 'show'])
         ->name('blogcategories.blogcategory.show')->where('id', '[0-9]+');
    Route::get('/{blogcategory}/edit',[BlogcategoriesController::class, 'edit'])
         ->name('blogcategories.blogcategory.edit')->where('id', '[0-9]+');
    Route::post('/', [BlogcategoriesController::class, 'store'])
         ->name('blogcategories.blogcategory.store');
    Route::put('blogcategory/{blogcategory}', [BlogcategoriesController::class, 'update'])
         ->name('blogcategories.blogcategory.update')->where('id', '[0-9]+');
    Route::delete('/blogcategory/{blogcategory}',[BlogcategoriesController::class, 'destroy'])
         ->name('blogcategories.blogcategory.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'blogs',
], function () {
    Route::get('/', [BlogsController::class, 'index'])
         ->name('blogs.blog.index');
    Route::get('/create', [BlogsController::class, 'create'])
         ->name('blogs.blog.create');
    Route::get('/show/{blog}',[BlogsController::class, 'show'])
         ->name('blogs.blog.show')->where('id', '[0-9]+');
    Route::get('/{blog}/edit',[BlogsController::class, 'edit'])
         ->name('blogs.blog.edit')->where('id', '[0-9]+');
    Route::post('/', [BlogsController::class, 'store'])
         ->name('blogs.blog.store');
    Route::put('blog/{blog}', [BlogsController::class, 'update'])
         ->name('blogs.blog.update')->where('id', '[0-9]+');
    Route::delete('/blog/{blog}',[BlogsController::class, 'destroy'])
         ->name('blogs.blog.destroy')->where('id', '[0-9]+');
});
