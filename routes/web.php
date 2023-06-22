<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PostsController;
// use App\Models\Posts;
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

// Landing
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('landing/{slug}', [LandingController::class, 'show'])->name('landingShow');

// Posts
Route::get('posts', [PostsController::class,'index'])->name('index');
Route::get('posts/create', [PostsController::class,'create'])->name('create');
Route::get('posts/{slug}/show', [PostsController::class,'show'])->name('show');
Route::get('posts/{slug}/edit', [PostsController::class,'edit'])->name('edit');
Route::post('posts', [PostsController::class,'store'])->name('store');
Route::patch('posts/{slug}', [PostsController::class,'update'])->name('update');
Route::delete('posts/{slug}', [PostsController::class,'delete'])->name('delete');

// Comments
Route::post('comment', [CommentsController::class,'comments'])->name('comment');
