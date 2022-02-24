<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

//use App\Http\Middleware\Authenticate as Middleware;


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
})->name('welcome')->middleware('auth');

// Article
Route::resource('/articles', ArticleController::class)->names('articles')->middleware('auth');

//Category
Route::resource('/categories', CategoryController::class)->names('categories')->middleware('auth');

//Admin
Route::resource('/admins', AdminController::class)->names('admins');

//Login manual
Route::get('login-manual', function () {
    return view('login-manual');
})->name('login-manual');
Route::post('authenticate', [\App\Http\Controllers\LoginManualController::class, 'authenticate'])->name('authenticate');
Route::get('logoutManual', [\App\Http\Controllers\LoginManualController::class, 'logoutManual'])->name('logoutmanual');

//Login
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


