<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends BaseApiController
{
    public static function generatePdf($data = null)
    {
        $pdf = PDF::loadView(
            'pdf.offer',
            compact('data')
        );

        $path = public_path('pdf/');
        $fileName =  'offer' . '.' . 'pdf';
        $pdf->save($path . '/' . $fileName);
        $pdf->download($fileName);
    }
}
