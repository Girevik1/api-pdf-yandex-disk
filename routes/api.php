<?php

use App\Http\Controllers\Api\PdfController;
use App\Http\Controllers\Api\WorkflowController;
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
    'prefix' => 'v1',
], function () {
    Route::get('/create', [WorkflowController::class, 'makeProcessByData']);

    Route::get('/generate-pdf', [PdfController::class, 'generatePdf']);
});
