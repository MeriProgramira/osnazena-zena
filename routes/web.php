<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('index');
})->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Post routes
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');

Route::get('/create-post', [PostController::class, 'create'])->name('create-post')->middleware('auth');
Route::post('/create-post', [PostController::class, 'store']);
Route::delete('/delete-post/{post}', [PostController::class, 'destroy'])->name('delete-post');
Route::get('/update-post/{post}', [PostController::class, 'edit'])->name('update-post')->middleware('auth');
Route::put('/update-post/{post}', [PostController::class, 'updatePost'])->name('update-post')->middleware('auth');

Route::get('/all-posts', [PostController::class, 'indexDashboard'])->name('all-posts')->middleware('auth');
Route::get('/{post}', [PostController::class, 'indexBlog'])->name('blog');

// Comments routes
Route::get('/comments', [CommentController::class, 'index'])->name('comments');
Route::post('/create-comment', [CommentController::class, 'store'])->name('create-comment')->middleware('auth');
Route::post('/update-comment/{comment}', [CommentController::class, 'update'])->name('update-comment')->middleware('auth');
Route::delete('/delete-comment/{comment}', [CommentController::class, 'destroy'])->name('delete-comment')->middleware('auth');
