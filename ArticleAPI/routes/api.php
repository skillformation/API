<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Select 1 article
Route::get('article/{article}',[ArticleController::class,'show']);

//Select liste des article
Route::get('articles/',[ArticleController::class,'index']);


//Creation d'un article
Route::get('article',[ArticleController::class,'store']);