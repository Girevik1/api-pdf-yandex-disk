<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use App\Models\ListPdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WorkflowController extends BaseApiController
{
    /**
     * @OA\Post(
     *     path="/generate-pdf",
     *     operationId="makePdf",
     *     tags={"WorkFlow"},
     *     summary="Generate pdf by got data and save it in Yandex disk.",
     *     security={
     *       {"api-token": {}},
     *     },
     *     @OA\Response(
     *         response="200",
     *         description="Everything is fine",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Not Found"
     *     ),
     *     @OA\Response(
     *         response="422",
     *         description="Please, check token access"
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(ref="#/components/schemas/WorkFlowMakeProcessByDataRequest")
     *     )
     * )
     *
     * Generate pdf by got data and save it in Yandex disk.
     * 
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function makeProcessByData(Request $request): Response
    {
        $result = [];
        $data = $request->all();
        info($data);

        if ($data == [])
            return response(json_encode(['error' => 'data is not given']), 422);

        PdfController::generatePdf($data);
        $result = YandexDiskController::store();


        return response(json_encode($result), 200);
    }

    /**
     * @OA\Delete(
     *     path="/delete/{pdf}",
     *     operationId="deleteById",
     *     tags={"WorkFlow"},
     *     summary="Delete pdf from Yandex disk and information from database on server.",
     *     security={
     *       {"api-token": {}},
     *     },
     *     @OA\Parameter(
     *         name="pdf",
     *         in="path",
     *         description="Pdf number",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          )
     *      )
     * )
     * 
     * Delete pdf by id from all place.
     * 
     * @param \App\Models\ListPdf $pdf
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function deleteById(ListPdf $pdf): Response
    {
        YandexDiskController::destroyFile($pdf->id, true);
        if ($pdf->delete())
            return response(json_encode(['success' => 'pdf has been destroyed']), 200);
    }

    public function deleteAllFiles()
    {
        ListPdf::chunk(100, function ($pdfs) {
            foreach ($pdfs as $pdf) {
                YandexDiskController::destroyFile($pdf->id, true);
                $pdf->destroy($pdf->id);
            }
        });

        return response(json_encode(['success' => 'All pdfs have been destroyed']), 200);
    }
}
