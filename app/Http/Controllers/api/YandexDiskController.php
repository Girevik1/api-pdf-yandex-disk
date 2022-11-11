<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Arhitector\Yandex\Client\OAuth;
use Arhitector\Yandex\Disk;
// use Arhitector\Yandex\Client\Exception\NotFoundException;

class YandexDiskController extends Controller
{
    public static function create()
    {
        // передать OAuth-токен зарегистрированного приложения.
        $disk = new Disk(env('TOKEN_ACCESS_YANDEX_DISK'));

        // $client = new OAuth(env('TOKEN_ACCESS_YANDEX_DISK', ''));
        // $disk = new Disk($client);
        // dd($client->refreshAccessToken('developer.david', 'DmHU+Q!7,$GgfZX'));

        /**
         * Получить Объектно Ориентированное представление закрытого ресурса.
         * @var  Arhitector\Yandex\Disk\Resource\Closed $resource
         */
        $resource = $disk->getResource('test1111121111.pdf');

        $has = $resource->has(); // проверить есть ли ресурс на диске.

        if ($has) {
            return response(['Message' => 'A file with the same name already exists!'], 201);
        }
        if (!$has) {
            // загружает локальный файл на диск. второй параметр отвечает за перезапись файла, если такой есть на диске.
            // загружает удаленный файл на диск, передайте ссылку http на удаленный файл.
            $resource->upload(public_path() . '/pdf/art.pdf');
        }

        $resource = $resource->toArray();

        return response(json_encode([
            'size' => $resource['size'],
            'link_doc_download' => $resource['file'],
            'link_doc_viewer' => $resource['docviewer'],
        ]), 200);

        // теперь удалить в корзину.
        // $removed = $resource->delete();
        // $disk->cleanTrash();
    }
}
