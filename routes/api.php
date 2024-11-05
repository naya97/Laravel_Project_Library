<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

Route::get('index',[UserController::class,'index']);
Route::post('show/{id}',[UserController::class,'show']);
Route::post('borrow/{id}',[UserController::class,'borrow']);
Route::delete('borrow/delete/{id}',[UserController::class,'deleteBorrowedBook']);
Route::get('show/books',[UserController::class,'showReadingList']);
Route::post('add/{id}',[UserController::class,'addBookToReadingList']);

Route::post('show/book/{id}',[BookController::class,'showBookData']);

Route::post('store/book',[AuthorController::class,'storeBook']);
Route::post('create/author',[AuthorController::class,'createAuthor']);
