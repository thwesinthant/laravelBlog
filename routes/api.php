<?php

use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\PostController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/items", [ItemController::class, 'index']);
Route::post("/items", [ItemController::class, 'store']);
Route::get("/items/{id}", [ItemController::class, 'show']);
Route::put("/items/{id}", [ItemController::class, 'update']);
Route::delete("/items/{id}", [ItemController::class, 'destroy']);

Route::get("/posts", [PostController::class, 'index']);
Route::post("/posts", [PostController::class, 'store']);
Route::get("/posts/{id}", [PostController::class, 'show']);
Route::put("/posts/{id}", [PostController::class, 'update']);
Route::delete("/posts/{id}", [PostController::class, 'destroy']);
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
