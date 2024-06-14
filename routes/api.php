<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\PostsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/v1/posts', [PostsController::class, 'index']);
Route::post('/v1/posts/store', [PostsController::class, 'store']);
Route::post('/v1/posts/update', [PostsController::class, 'update']);
Route::delete('/v1/posts/{id?}', [PostsController::class, 'destroy']);
Route::get('/v1/posts/{id?}', [PostsController::class, 'show']);
