<?php

use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(ThemeController::class)->name('web.')->group(function(){
    Route::get('/about','about')->name('about');
    Route::get('/services','services')->name('services');
    Route::get('/contact','contact')->name('contact');
});