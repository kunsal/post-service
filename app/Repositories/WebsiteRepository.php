<?php


namespace App\Repositories;


use App\Contracts\WebsiteRepositoryInterface;
use App\Models\Website;

class WebsiteRepository extends AbstractRepository implements WebsiteRepositoryInterface
{
    public function __construct(Website $website)
    {
        parent::__construct($website);
    }

}
