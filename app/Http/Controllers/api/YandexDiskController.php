<?php

namespace App\Http\Controllers\Api;

// use App\Http\Controllers\Controller;
use App\Models\ListPdf;
use Illuminate\Http\Request;
use Arhitector\Yandex\Client\OAuth;
use Arhitector\Yandex\Disk;
use ErrorException;
use Illuminate\Http\Response;

// use Arhitector\Yandex\Client\Exception\NotFoundException;

class YandexDiskController extends BaseApiController
{
    private $disk;

    public function __construct()
    {
        // передать OAuth-токен зарегистрированного приложения.
        $this->disk = new Disk(config('app.token_yandex'));
    }

    /**
     * Сохраняет файл на яндекс диск - присваивает уникальное имя
     * Сохраняем информацию о файле в бд
     *
     * @return  array
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
     *  Удалить файл по id в корзину и очистить корзину
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

        // $thisObject->disk->cleanTrash(); // очистить корзину
    }

    /**
     * Получить информация о Яндекс.Диске
     */
    public function getInfoDisk(): Response
    {
        $result = $this->disk->toArray();
        return response(json_encode($result), 200);
    }
}
