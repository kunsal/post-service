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
        try {
            $service->subscribe($request->all());
            return sendSuccessResponse('User subscribed successfully');
        } catch (\Exception $exception) {
            logException($exception);
            return sendErrorResponse('User subscription failed', 400);
        }
    }
}
