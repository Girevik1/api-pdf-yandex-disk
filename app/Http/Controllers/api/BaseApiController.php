<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     title="Documentation API",
 *     version="1.0.0",
 *     @OA\Contact(
 *         email="se6@rep.earth"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 * @OA\Tag(
 *     name="WorkFlow",
 *     description="Workflow with pdf",
 * )
 * @OA\Tag(
 *     name="YandexDisk",
 *     description="Some jobs with Yandex.Disk",
 * )
 * @OA\Server(
 *     description="Generation pdf - API server",
 *     url="http://localhost/api/v1"
 * )
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     in="header",
 *     name="api-token",
 *     securityScheme="api-token"
 * )
 */
class BaseApiController extends Controller
{
    //
}
