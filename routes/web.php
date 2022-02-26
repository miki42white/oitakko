<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\ResultController;


Route::get('/', [SchoolController::class,'show']);

Route::get('/result', [ResultController::class,'currentLocation']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/detail/{name}',[SchoolController::class,'showdetail']);

Route::post('/favorite/{name}',[FavoriteController::class,'favorite']);

Route::post('/unfavorite/{name}',[FavoriteController::class,'unfavorite']);

Route::get('/mypage',[MypageController::class,'show']);

Route::post('/reserve/{name}',[ReserveController::class,'reserve']);

Route::get('/record/{name}',[MypageController::class,'record']);

Route::get('/memo/{name}',[MemoController::class,'showmemo']);

Route::post('/memo/{name}',[MemoController::class,'deleteInsert']);

Route::get('/check/{name}',[CheckController::class,'showcheck']);

Route::post('/makecheck/{name}',[CheckController::class,'create']);

Route::post('/updatecheck/{name}',[CheckController::class,'update']);



