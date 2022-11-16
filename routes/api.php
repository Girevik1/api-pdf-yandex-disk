<?php

use App\Http\Controllers\Api\WorkflowController;
use App\Http\Controllers\Api\YandexDiskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'middleware' => ['ensure_token_is_valid'],
    'prefix' => 'v1',
], function () {
    // Common actions
    Route::post('/generate-pdf', [WorkflowController::class, 'makeProcessByData']);
    Route::delete('/delete/{pdf}', [WorkflowController::class, 'deleteById']);
    Route::delete('/delete-all', [WorkflowController::class, 'deleteAllFiles']);

    // Yandex
    Route::get('/get-info-disk', [YandexDiskController::class, 'getInfoDisk']);
});
