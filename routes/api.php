<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;

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

//categoria
Route::get('/categorias', [CategoriaController::class,'index']);
Route::get('/categorias/{categoria}', [CategoriaController::class,'show']);
Route::post('/categorias', [CategoriaController::class,'store']);
Route::put('/categorias/{id}', [CategoriaController::class,'update']);
Route::delete('/categorias/{id}', [CategoriaController::class,'destroy']);


//Posts

Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{post}', [PostController::class,'show']);
Route::post('/posts', [PostController::class,'store']);
Route::put('/posts/{id}', [PostController::class,'update']);
Route::delete('/posts/{id}', [PostController::class,'destroy']);

//comentarios

Route::get('/comentarios', [ComentarioController::class,'index']);
Route::get('/comentarios/{comentario}', [ComentarioController::class,'show']);
Route::post('/comentarios', [ComentarioController::class,'store']);
Route::put('/comentarios/{id}', [ComentarioController::class,'update']);
Route::delete('/comentarios/{id}', [ComentarioController::class,'destroy']);