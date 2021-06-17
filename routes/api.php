<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\TagApiController;
use App\Http\Controllers\Api\UserApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categories', [CategoryApiController::class, 'index']);
Route::get('category/{category}', [CategoryApiController::class, 'show']);
Route::get('category/{category}/posts', [CategoryApiController::class, 'posts']);
Route::post('category/store', [CategoryApiController::class, 'store']);


Route::get('posts', [PostApiController::class, 'index']);
Route::post('posts/store', [PostApiController::class, 'store']);


Route::get('authors', [UserApiController::class, 'index']);
Route::get('author/{author}/posts', [UserApiController::class, 'posts']);

Route::get('tags', [TagApiController::class, 'index']);
Route::get('tag/{tag}/posts', [TagApiController::class, 'posts']);