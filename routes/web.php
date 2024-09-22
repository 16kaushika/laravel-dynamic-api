<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataHubController;

Route::get('/', function () { return view('getting-started'); })->name('getting-started');
Route::get('/quick-start', function () { return view('quick-start'); })->name('quick-start');

// Defining API routes within web.php
Route::prefix('api')->middleware('api')->group(function () {
    Route::get('{project}/{module}', [DataHubController::class, 'getDataList']);
    Route::post('{project}/{module}', [DataHubController::class, 'create']);
    Route::get('{project}/{module}/{dataId}', [DataHubController::class, 'getDetail']);
    Route::put('{project}/{module}/{dataId}', [DataHubController::class, 'update']);
    Route::patch('{project}/{module}/{dataId}', [DataHubController::class, 'patch']);
    Route::delete('{project}/{module}/{dataId}', [DataHubController::class, 'remove']);
});
