<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProjectController;

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


// Authentication
Auth::routes();
Route::group(['middleware' => ['adminRoutes']], function () {
    // only admin has rights to reach those routes
    Route::get('/create-project', [ProjectController::class, 'create'])->name('create-project')->middleware('auth');
    Route::post('/create-project', [ProjectController::class, 'store']);
    Route::delete('/delete-project/{project}', [ProjectController::class, 'destroy'])->name('delete-project');
    Route::get('/update-project/{project}', [ProjectController::class, 'edit'])->name('update-project')->middleware('auth');
    Route::put('/update-project/{project}', [ProjectController::class, 'updateProject'])->name('update-project')->middleware('auth');

    Route::get('/create-news', [NewsController::class, 'create'])->name('create-news')->middleware('auth');
    Route::post('/create-news', [NewsController::class, 'store']);
    Route::delete('/delete-new/{new}', [NewsController::class, 'destroy'])->name('delete-new');
    Route::get('/update-news/{new}', [NewsController::class, 'edit'])->name('update-news')->middleware('auth');
    Route::put('/update-news/{news}', [NewsController::class, 'updateNews'])->name('update-news')->middleware('auth');

    Route::post('/update-comment/{comment}', [CommentController::class, 'update'])->name('update-comment')->middleware('auth');
    Route::delete('/delete-comment/{comment}', [CommentController::class, 'destroy'])->name('delete-comment')->middleware('auth');

});

Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

// Post routes
Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/create-post', [PostController::class, 'create'])->name('create-post')->middleware('auth');
Route::post('/create-post', [PostController::class, 'store']);
Route::delete('/delete-post/{post}', [PostController::class, 'destroy'])->name('delete-post');
Route::get('/update-post/{post}', [PostController::class, 'edit'])->name('update-post')->middleware('auth');
Route::put('/update-post/{post}', [PostController::class, 'updatePost'])->name('update-post')->middleware('auth');

Route::get('/all-posts', [PostController::class, 'indexDashboard'])->name('all-posts')->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'indexBlog'])->name('blog');

// Projects routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/all-projects', [ProjectController::class, 'indexDashboard'])->name('all-projects')->middleware('auth');
Route::get('/projects/{project}', [ProjectController::class, 'indexProject'])->name('project');

// News routes
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/all-news', [NewsController::class, 'indexDashboard'])->name('all-news')->middleware('auth');
Route::get('/news/{new}', [NewsController::class, 'indexNews'])->name('new');

// Comments routes
Route::post('/create-comment', [CommentController::class, 'store'])->name('create-comment')->middleware('auth');


// Inspire section routes
Route::get('/inspire', function () {
    return view('girlthink');
})->name('inspire');

Route::get('/useful-links', function () {
    return view('links');
})->name('useful-links');

Route::get('/quotes', function () {
    return view('quotes');
})->name('quotes');
