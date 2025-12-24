<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/chatgpt', fn() => view('chatgpt'))->name('chatgpt');
Route::get('/hitster', fn() => view('hitster'))->name('hitster');

use App\Http\Controllers\ChatController;

Route::post('/chat', [ChatController::class, 'send']);

use App\Http\Controllers\SpotifyController;

Route::get('/spotify/login', [SpotifyController::class, 'login']);
Route::get('/spotify/callback', [SpotifyController::class, 'callback']);
Route::get('/spotify/current-year', [SpotifyController::class, 'currentYear']);
