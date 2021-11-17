<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteSubscriptionRequest;
use App\Services\WebsiteService;
use App\Services\WebsiteSubscriptionService;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(WebsiteService $service)
    {
        return response()->json($service->getList());
    }

    public function subscribe(WebsiteSubscriptionRequest $request, WebsiteSubscriptionService $service)
    {
        if ($service->subscribe($request->all())) {
            return response()->json([
                'status' => 'success',
                'data' => 'User subscribed successfully'
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Subcription failed'
        ], 400);
    }
}
