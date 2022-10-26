<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* 
// Listing Articles Endpoint

* /api/articles -> return list of all articles
* /api/article/{id}/show -> return article with a specific ID
* /api/articles/{id}/comments -> return articles comment
* /api/articles/{id}/like -> return likes
* /api/articles/{id}/view -> returns article like view
* 

*/

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::get('/articles/{id}/comments', [ArticleController::class, 'comments']);
Route::get('/articles/{id}/like', [ArticleController::class, 'likes']);
Route::get('/articles/{id}/view', [ArticleController::class, 'view']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
