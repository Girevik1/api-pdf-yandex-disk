<?php

namespace App\Http\Controllers\Api;

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
     *     summary="Generate pdf by got data and save it in Yandex.Disk (response has link to download and link to review)",
     *     security={
     *       {"x-api-token": {}},
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
     * Generate pdf by got data and save it in Yandex.Disk
     * 
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function makeProcessByData(Request $request): Response
    {
        $result = [];
        $dataToView = $request->all();
        // $data = json_decode($data, true);

        info($dataToView);

        if ($dataToView == []) return response(json_encode(['error' => 'data is not given']), 422);

        PdfController::generatePdf($dataToView);
        // dd($data);
        $result = YandexDiskController::store();


        return response(json_encode($result), 200);
    }

    /**
     * @OA\Delete(
     *     path="/delete/{uuid}",
     *     operationId="deleteById",
     *     tags={"WorkFlow"},
     *     summary="Delete file by uuid from Yandex.Disk and information from database on server",
     *     security={
     *       {"x-api-token": {}},
     *     },
     *     @OA\Parameter(
     *         name="uuid",
     *         in="path",
     *         description="uuid file",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     @OA\Response(
     *          response=200,
     *          description="OK",
     *      ),
     *      @OA\Response(
     *         response="404",
     *         description="Not Found"
     *      ),
     * )
     * 
     * Delete pdf by id from all place.
     * 
     * @param \App\Models\ListPdf $pdf
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function deleteByUuid(ListPdf $pdf): Response
    {
        YandexDiskController::destroyFile($pdf->id, true);
        if ($pdf->delete())
            return response(json_encode(['success' => 'pdf has been destroyed']), 200);
    }

    /**
     * @OA\Delete(
     *     path="/delete-all",
     *     operationId="deleteAll",
     *     tags={"WorkFlow"},
     *     summary="Delete all files from Yandex.Disk and information from database on server",
     *     security={
     *       {"x-api-token": {}},
     *     },
     *     @OA\Response(
     *          response=200,
     *          description="OK",
     *      ),
     *      @OA\Response(
     *         response="404",
     *         description="Not Found"
     *      ),
     * )
     * 
     * Delete all files from all place.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function deleteAllFiles(): Response
    {
        ListPdf::chunk(100, function ($pdfs) {
            foreach ($pdfs as $pdf) {
                YandexDiskController::destroyFile($pdf->id, true);
                $pdf->destroy($pdf->id);
            }
        });

        return response(json_encode(['success' => 'All files have been destroyed']), 200);
    }
}
