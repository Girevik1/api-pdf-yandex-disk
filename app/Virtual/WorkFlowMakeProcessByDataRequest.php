<?php

namespace App\Virtual;

/**
 * @OA\Schema(
 *     type="object",
 *     title="Example - what data should the body consist of",
 *     description="Some simple request create as example",
 * )
 */
class WorkFlowMakeProcessByDataRequest
{
    /**
     * @OA\Property(
     *     title="ID",
     *     description="Unique ID",
     *     example="1",
     * )
     *
     * @var int
     */
    public $id;

    /**
     * @OA\Property(
     *     title="Data",
     *     description="Name of key for storring",
     *     example="random",
     * )
     *
     * @var string
     */
    public $data;

    /**
     * @OA\Property(
     *     title="Value",
     *     description="Value for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $value;
}
