<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PracticeAreasController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\CommentsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('/practice-areas', [PracticeAreasController::class, 'index'])->name('services');
Route::get('/practice-areas/{area}', [PracticeAreasController::class, 'single'])->name('services.detail');
Route::get('/team-members', [PageController::class, 'members'])->name('members');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/search/', [NewsController::class, 'search'])->name('news.search');
Route::get('/news/{slug}', [NewsController::class, 'single'])->name('news.single');
Route::get('/news/category/{categorySlug}', [NewsController::class, 'categoryPosts'])->name('news.category.posts');
Route::post('/comment', [CommentsController::class, 'store'])->name('comment.store');



Route::get('/careers', [CareersController::class, 'index'])->name('careers');
Route::get('/careers/{slug}', [CareersController::class, 'single'])->name('careers.single');
