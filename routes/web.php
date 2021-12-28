<?php

use Illuminate\Support\Facades\Route;
use Kriss\LaravelLogReader\Controllers\LogReaderController;

Route::prefix('/log-reader')->group(function () {
    Route::redirect('/', '/log-reader/index');
    Route::get('/index', LogReaderController::class . '@index');
    Route::get('//view', LogReaderController::class . '@view');
    Route::get('/tail', LogReaderController::class . '@tail');
    Route::get('/download', LogReaderController::class . '@download');
    Route::get('/delete', LogReaderController::class . '@delete');
});
