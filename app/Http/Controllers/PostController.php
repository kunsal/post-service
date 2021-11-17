<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Services\CreatePostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(CreatePostRequest $request, CreatePostService $service)
    {
        $post = $service->create($request->all());
        return response()->json([
            'status' => 'success',
            'data' => 'Post created successfully'
        ], 201);
    }
}
