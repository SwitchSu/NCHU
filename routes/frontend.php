<?php

use App\Http\Controllers\Frontend\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\NewController;
use App\Http\Controllers\Frontend\WebInformationController;
use App\Http\Controllers\Frontend\CourseController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('about')->group(function () {
    Route::get('/type/{input}', [AboutController::class, 'get_about'])->name('about.type');
});

Route::prefix('news')->group(function () {
    Route::get('/type/{input}', [NewController::class, 'get_news'])->name('news.type');
});

Route::prefix('web')->group(function () {
    Route::get('/type/{input}', [WebInformationController::class, 'get_web'])->name('web.type');
});

Route::prefix('course')->group(function () {
    Route::get('/type/{input}', [CourseController::class, 'get_course'])->name('course.type');
});

