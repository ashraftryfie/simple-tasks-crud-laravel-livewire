<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::controller(TaskController::class)->group(function () {
    Route::get('/home', 'index')->name('task.index')->middleware('auth');
    Route::post('/tasks', 'store')->name('task.store');
});
