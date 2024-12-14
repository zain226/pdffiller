<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * @OA\Info(
     *     title="My Laravel API",
     *     version="1.0.0",
     *     description="API documentation for managing documents and signers."
     * )
     */

    /**
     * @OA\Post(
     *     path="/api/documents",
     *     tags={"Documents"},
     *     summary="Create a new document",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"title", "file"},
     *             @OA\Property(property="title", type="string", example="Contract Document"),
     *             @OA\Property(property="file", type="string", format="binary")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Document created successfully",
     *         @OA\JsonContent(ref="#/components/schemas/Document")
     *     )
     * )
     */

    public function store(Request $request)
    {

    }
}
