<?php

use App\Http\Controllers\Api\PdfController;
use App\Http\Controllers\Api\WorkflowController;
use App\Http\Controllers\Api\YandexDiskController;
use Illuminate\Support\Facades\Route;

Route::group([
    // 'middleware' => ['ensure_token_is_valid'],
    'prefix' => 'v1',
], function () {
    // For local test
    // Route::get('/pdf', [PdfController::class, 'generatePdf']);
    // Route::get('/pdf1', [PdfController::class, 'generatePdfForTest']); //

    // Common actions
    Route::post('/generate-pdf', [WorkflowController::class, 'makeProcessByData']);
    Route::delete('/delete/{pdf}', [WorkflowController::class, 'deleteByUuid']);
    Route::delete('/delete-all', [WorkflowController::class, 'deleteAllFiles']);
    // Yandex
    Route::get('/get-info-disk', [YandexDiskController::class, 'getInfoDisk']);
});
