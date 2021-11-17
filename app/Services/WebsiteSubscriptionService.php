<?php


namespace App\Services;


use App\Contracts\WebsiteRepositoryInterface;

class WebsiteSubscriptionService
{
    protected $websiteRepository;
    protected $userService;

    public function __construct(WebsiteRepositoryInterface $websiteRepository,  UserService $userService)
    {
        $this->websiteRepository = $websiteRepository;
        $this->userService = $userService;
    }

    public function subscribe($data)
    {
        $user = $this->userService->get($data);
        $user->websites()->sync([$data['website_id']]);
        return true;
    }
}
