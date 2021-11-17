<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Services\CreatePostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(CreatePostRequest $request, CreatePostService $service)
    {
        try {
            $post = $service->create($request->all());
            return sendSuccessResponse('Post created successfully', [
                'name' => $post->name,
                'description' => $post->descripiton,
                'website' => $post->website->name
            ], 201);

        } catch (\Exception $exception) {
            logException($exception);
            return sendErrorResponse('Something went wrong creating the post. Try again');
        }

    }
}
