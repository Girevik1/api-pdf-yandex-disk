<?php

namespace App\Http\Controllers\Api;

use App\Models\ListPdf;
use Arhitector\Yandex\Disk;
use Illuminate\Http\Response;


class YandexDiskController extends BaseApiController
{
    private $disk;

    public function __construct()
    {
        // pass the OAuth token of the registered application.
        $this->disk = new Disk(config('app.token_yandex'));
    }

    /**
     * Saves the file to Yandex.Disk - assigns a unique name
     * Save information about the file in the database
     *
     * @return  array|Response
     */
    public static function store(): array|Response
    {
        $thisObject = new self;
        $lastPdf = ListPdf::latest()->first();
        $countPdf = $lastPdf ? $lastPdf->id : 0;

        $resource = $thisObject->disk->getResource('offer_' . $countPdf + 1 . '.pdf');

        // загружает локальный файл на диск, второй параметр отвечает за перезапись файла, если такой есть на диске.
        $resource->upload(public_path() . '/pdf/offer.pdf', true);

        $resource = $resource->toArray(); // получаем массив данных о созданом файле

        // Сохраняем у себя в бд информацию о созданом на янд диске файле
        $newPdf = new ListPdf();
        $newPdf->data = json_encode($resource);
        $newPdf->save(); //

        return [
            'size' => $resource['size'],
            'link_doc_download' => $resource['file'],
            'link_doc_viewer' => $resource['docviewer'],
        ];
    }

    /**
     *  Delete file by id to recycle bin and empty recycle bin
     * 
     * @param   string|int $id id файла,заданного при сох-ии в бд
     * 
     * @param   boolean $permanently TRUE Признак безвозвратного удаления
     *
     * @return  void
     */
    public static function destroyFile(string|int $id, bool $isPermanently): void
    {
        $thisObject = new self;
        $resource = $thisObject->disk->getResource('offer_' . $id . '.pdf');

        if (!$resource->has()) return;
        $resource->delete($isPermanently);
    }

    /**
     * @OA\Get(
     *     path="/get-info-disk",
     *     operationId="infoDisk",
     *     tags={"YandexDisk"},
     *     summary="Get information about Yandex.Disk",
     *     security={
     *       {"api-token": {}},
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
     * Get information about Yandex.Disk
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function getInfoDisk(): Response
    {
        $result = $this->disk->toArray();
        return response(json_encode($result), 200);
    }
}
