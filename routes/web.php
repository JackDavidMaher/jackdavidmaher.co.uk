<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/chatgpt', fn() => view('chatgpt'))->name('chatgpt');

use App\Http\Controllers\ChatController;

Route::post('/chat', [ChatController::class, 'send']);

