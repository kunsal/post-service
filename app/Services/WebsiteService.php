<?php


namespace App\Services;


use App\Contracts\WebsiteRepositoryInterface;

class WebsiteService
{
    protected $websiteRepository;

    public function __construct(WebsiteRepositoryInterface $websiteRepository)
    {
        $this->websiteRepository = $websiteRepository;
    }

    public function websiteExists($url)
    {
        return $this->websiteRepository->findBy('url', $url, true);
    }

    public function createNew($name, $url)
    {
        return $this->websiteRepository->save(['name' => $name, 'url' => $url]);
    }

    public function getList()
    {
        $websites = $this->websiteRepository->getList('id', 'name');
        $list = [];
        foreach ($websites as $key => $value) {
            $list[] = [
                'id' => $key,
                'name' => $value
            ];
        }
        return $list;
    }
}
