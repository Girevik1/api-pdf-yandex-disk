<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public static function generatePdf($request = null)
    {
        $data = $request; {

            $pdf = PDF::loadView(
                'pdf.offer',
                compact('data')
            );

            $path = public_path('pdf/');
            $fileName =  'art' . '.' . 'pdf';
            $pdf->save($path . '/' . $fileName);
            $pdf->download($fileName);
        }
    }
}
