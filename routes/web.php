<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::post('/send-comment', [CommentController::class, 'send']);