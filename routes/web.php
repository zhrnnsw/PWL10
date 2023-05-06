<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::resource('articles',ArticleController::class);
Route::get('article/cetak_pdf',[ArticleController::class, 'cetak_pdf']);

Route::get('/', function () {
    return view('welcome');
});
