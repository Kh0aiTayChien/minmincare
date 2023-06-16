<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendController;
use Illuminate\Routing\Router;
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
    return view('pages/home-page/index');
});
Route::get('/gioi-thieu', function () {
    return view('pages/gioi-thieu/index');
});
Route::middleware('throttle:10,60')->group(function (Router $router) {
    Route::post("/send",[SendController::class,'index'])->name('send');
});
Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('articles', 'ArticleController')->except(['index']);;
    Route::get('index/{conditionView}', [ArticleController::class,'index'])->name('articles.index');
    Route::delete('articles/forceDel/{article} ', [ArticleController::class,'forceDestroy'])->name('articles.forceDestroy');
    Route::post('articles/trash/{article} ', [ArticleController::class,'restore'])->name('articles.restore');
    Route::post('/order-number', [ArticleController::class,'OrderNumber'])->name('admin.updateOrderNumber');
    Route::get('/media',[MediaController::class,'index'])->name('admin.media.index');
    Route::post('/upload',[MediaController::class,'upload'])->name('admin.media.upload');
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/profile', [ProfileController::class,'index'])->name('profile');
    Route::put('/profile', [ProfileController::class,'update'])->name('profile.update');
    Route::get('/trash', [ArticleController::class,'trashBin'])->name('admin.trashBin');
    Route::get('/about', function () {
        return view('admin/about');
    })->name('about');
});



