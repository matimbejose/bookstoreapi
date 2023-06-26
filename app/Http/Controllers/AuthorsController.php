<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use App\Http\Resources\AuthorsResource;
use App\Http\Requests\AuthorsRequest;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 /**
 * @OA\Get(
 *     path="/api/authors",
 *     summary="Get all authors",
 *     description="Retrieves a list of all authors",
 *     tags={"Authors"},
 *     @OA\Response(
 *         response=200,
 *         description="List of authors retrieved successfully",
 *         @OA\JsonContent(
 *             type="array",
 *             @OA\Items(
 *                 @OA\Property(property="id", type="integer", example="1"),
 *                 @OA\Property(property="name", type="string", example="John Doe")
 *             )
 *         )
 *     )
 * )
 */

    public function index()
    {
        return AuthorsResource::collection(Author::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */

/**
 * @OA\Get(
 *     path="/api/authors/{author}",
 *     summary="Get author details",
 *     description="Retrieves the details of a specific author",
 *     tags={"Authors"},
 *     @OA\Parameter(
 *         name="author",
 *         in="path",
 *         description="ID of the author",
 *         required=true,
 *         @OA\Schema(
 *             type="integer",
 *             format="int64"
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Author details retrieved successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="id", type="integer", example="1"),
 *                 @OA\Property(property="name", type="string", example="John Doe")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Author not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Author not found.")
 *         )
 *     )
 * )
 */
    public function show(Author $author)
    {

        return new AuthorsResource($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorsRequest $request, Author $author)
    {
        $author->update([
            'name' => $request->input('name')
        ]);

        return new AuthorsResource($author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();

        return response(null, 204);
    }
}
