<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkflowController extends Controller
{
    public function makeProcessByData(Request $request): Response
    {
        PdfController::generatePdf($request);
        $result = YandexDiskController::create();

        return $result;
    }
}
