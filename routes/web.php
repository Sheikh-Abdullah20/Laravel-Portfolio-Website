<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queryController;
use App\Http\Controllers\routesController;


Route::controller(routesController::class)->group(function(){

    Route::get('/','showHome')->name('home');
    Route::get('/contact','showContact')->name('contact');
});

Route::post('/add',[queryController::class,'addUser'])->name('addUser');
