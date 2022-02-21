<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'about']);

Route::get('/article/{id}', [App\Http\Controllers\ArticleController::class, 'article']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::group(['prefix'=>'/program'], function () {
    Route::get('/manajemen-informatika', function(){
        echo 'DIII Manajemen Informatika';
    });
    Route::get('/teknik-informatika', function(){
        echo 'DIV Teknik Informatika';
    });   
});

Route::get('/news/{kbrti}', [App\Http\Controllers\HomeController::class, 'newsti']);

Route::group(['prefix'=>'sarana'], function () {
    Route::get('/perkantoran', function(){
        echo 'Kantor Polinema';
    });
    Route::get('/kelas', function(){
        echo 'Ruang Kelas Jurusan Teknologi Informasi';
    });
    Route::get('/lab', function(){
        echo 'Ruang Laboratorium';
    });
    Route::get('/lainnya', function(){
        echo 'Lain';
    });
});

Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutus']);

Route::get('/comment/{yourname}/{yourmessages}', [App\Http\Controllers\HomeController::class, 'comment']);

