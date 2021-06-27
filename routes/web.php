<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function ()
{
    Route::get('/websites', [WebsiteController::class, 'admin'])->name('websites');
    Route::get('/create-website', [WebsiteController::class, 'add'])->name('create-website');
    Route::post('/insert-website', [WebsiteController::class, 'insert'])->name('insert-website');
    Route::post('/delete-website', [WebsiteController::class, 'insert'])->name('delete-website');
    Route::view('/categories', 'admin/category')->name('categories');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
