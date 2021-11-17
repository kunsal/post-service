<?php

function sendSuccessResponse($message = 'The operation was successful', $data = [], $code = 200): \Illuminate\Http\JsonResponse
{
    $response = [
        'status' => 'success',
        'message' => $message,
    ];

    return response()->json($response, $code);
}

function sendErrorResponse($message, $code = 500): \Illuminate\Http\JsonResponse
{
    return response()->json([
        'status' => 'error',
        'message' => $message
    ], $code);
}

function logException($exception)
{
    \Illuminate\Support\Facades\Log::error($exception->getMessage(). " \n" . $exception->getTraceAsString());
}

