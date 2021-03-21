<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\OrderNewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [IndexController::class, 'index'])
    ->name('admin');
    Route::resource('news', AdminNewsController::class);
    Route::resource('categories', CategoryController::class);
});

Route::group(['prefix' => 'news', 'as' => 'news.'], function() {
    Route::get('/', [NewsController::class, 'index'])
        ->name('index');

    Route::get('/{id}', [NewsController::class, 'show'])
        ->where('id', '\d+')
        ->name('show');

    Route::get('/news.order', [OrderNewsController::class, 'index'])
        ->name('order');
    Route::resource('order_news', OrderNewsController::class);

});

Route::get('/example/{category}', fn(\App\Models\Category $category) => $category);
