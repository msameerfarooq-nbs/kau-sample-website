<?php

use App\Http\Controllers\FacultyController;
use Illuminate\Support\Facades\Route;

Route::prefix('faculty')->name('faculty.')->group(function () {

    // Index route — just '/' because prefix is 'faculty'
    Route::get('/', [FacultyController::class, 'index'])->name('index');

    // Profile route
    Route::get('{lang}/{faculty}', [FacultyController::class, 'profile'])
        ->name('profile');

});
