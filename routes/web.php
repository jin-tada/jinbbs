<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageBoardController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/MessageBoard/add', [MessageBoardController::class, 'add']);
Route::post('/MessageBoard/confirm', [MessageBoardController::class, 'confirm']);
Route::get('/MessageBoard/complete', function () {
    return view('MessageBoard.complete');
});
Route::get('/MessageBoard/index', [MessageBoardController::class, 'index']);

Route::post('/MessageBoard/delete/{id}', [MessageBoardController::class, 'delete']);
Route::get('/MessageBoard/edit/{id}', [MessageBoardController::class, 'edit']);
Route::post('/MessageBoard/edit/{id}', [MessageBoardController::class, 'update']);
