<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataHubController;
// use Fruitcake\Cors\HandleCors;
use App\Http\Middleware\CustomCors;

Route::get('/', function () { return view('getting-started'); })->name('getting-started');
Route::get('/quick-start', function () { return view('quick-start'); })->name('quick-start');
Route::get('/demo', function () { return view('demo'); })->name('demo');

// Defining API routes within web.php
Route::prefix('api')->middleware([CustomCors::class,'api'])->group(function () {
    Route::get('{project}/{module}', [DataHubController::class, 'getDataList']);
    Route::post('{project}/{module}', [DataHubController::class, 'create']);
    Route::get('{project}/{module}/{dataId}', [DataHubController::class, 'getDetail']);
    Route::put('{project}/{module}/{dataId}', [DataHubController::class, 'update']);
    Route::patch('{project}/{module}/{dataId}', [DataHubController::class, 'patch']);
    Route::delete('{project}/{module}/{dataId}', [DataHubController::class, 'remove']);

    Route::delete('{project}', [DataHubController::class, 'deleteProject']);
    Route::delete('{project}/{module}', [DataHubController::class, 'deleteModule']);
    
    Route::delete('cron/command/db/clean', [DataHubController::class, 'deleteDbRecords']);
    Route::delete('cron/command/electronic-devices/clean', [DataHubController::class, 'deleteElectronicDevicesRecords']);

});