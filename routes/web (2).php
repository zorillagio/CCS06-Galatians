<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalatiansController;
Route::get('/', [GalatiansController::class, 'index']);
Route::get('/chapter/{chapter_number}', [GalatiansController::class, "readByChapter"]);
Route::get('/all-chapters', [GalatiansController::class, 'readAllChapters']);