<?php


use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\PostController;
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

Route::get('/', [IndexController::class,"index"])->name("index");
Route::get('/blogs', [PostController::class,"index"])->name("blogs");
Route::get('/blog/{slug}', [PostController::class,"show","slug"])->where(["slug"])->name("blog");
