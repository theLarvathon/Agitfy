<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TopicController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/cari', fn () => view('search'))
    ->name('search');

Route::get('/mapel/{subject}', [SubjectController::class, 'show'])
    ->name('subjects.show');

Route::get('/mapel/{subject}/{topicslug}', [TopicController::class, 'show'])
    ->name('topics.show');