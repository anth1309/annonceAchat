<?php

use App\Http\Controllers\AnnouncesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('announces', [AnnouncesController::class, 'index'])->name('announces.index');

Route::get('announces/create', [AnnouncesController::class, 'create'])->name('announces.create');
Route::post('announces', [AnnouncesController::class, 'store'])->name('announces.store');
