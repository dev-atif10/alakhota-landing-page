<?php

use App\Http\Controllers\AlakhotahJoinRequestController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JoinRequestController;

Route::get('join-request', [JoinRequestController::class, 'show'])->name('join-request');
Route::view('/', 'welcome')->name('welcome');
Route::post('join-request', [AlakhotahJoinRequestController::class, 'store'])->name('join-request.store');
Route::view('join-request-success', 'reception')->name('join-request.success');
