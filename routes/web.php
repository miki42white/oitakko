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

Route::get('/detail/{id}',[SchoolController::class,'showdetail']);

Route::post('/favorite/{id}',[FavoriteController::class,'favorite']);

Route::post('/unfavorite/{id}',[FavoriteController::class,'unfavorite']);

Route::get('/mypage',[MypageController::class,'show']);

Route::post('/reserve/{id}',[ReserveController::class,'deleteInsert']);

Route::get('/record/{id}',[MypageController::class,'record']);

Route::get('/memo/{id}',[MemoController::class,'showmemo']);

Route::post('/memo/{id}',[MemoController::class,'deleteInsert']);

Route::get('/check/{id}',[CheckController::class,'showcheck']);

Route::post('/makecheck/{id}',[CheckController::class,'create']);

Route::post('/updatecheck/{id}',[CheckController::class,'update']);



