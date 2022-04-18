<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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
Route::get('/home', function(){
    return view('home');
});
/*Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);

Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'article']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::group(['prefix'=>'/category'], function () {
    Route::get('/marbel-edu-games', function(){
        echo 'Marbel Premium <br>';
        echo 'Marbel Piano<br>';
        echo 'Marbel Teliti Mencari Perbedaan <br>';
    });
    Route::get('/marbel-and-friends-kids-games', function(){
        echo 'Marbel Peternakan <br>';
        echo 'Marbel Penyelamat Hewan <br>';
        echo 'Marbel Polisi <br>';
    });   
});

Route::get('/news/{kbrti}', [App\Http\Controllers\HomeController::class, 'newsti']);

Route::group(['prefix'=>'program'], function () {
    Route::get('/karir', function(){
        echo 'Ilustrator <br>';
        echo 'Trainer Bisnis dan Pemasaran <br>';
        echo 'Fronted Developer <br>';
    });
    Route::get('/magang', function(){
        echo 'Magang Teknis <br>';
        echo 'Magang Non-Teknis <br>';
    });
    Route::get('/kunjungan-industri', function(){
        echo 'Kunjungan Industri: Tanggungjawab dan Tugas Seorang Programmer <br>';
        echo 'Kunjungan Industri : Game, Animasi, dan Industri Kreatif';
    });
});

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutus']);

Route::get('/comment/{yourname}/{yourmessages}', [App\Http\Controllers\HomeController::class, 'comment']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('articles', ArticleController::class);
