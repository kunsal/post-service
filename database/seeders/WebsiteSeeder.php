<?php

namespace Database\Seeders;

use App\Contracts\WebsiteRepositoryInterface;
use App\Models\Website;
use App\Services\WebsiteService;
use Illuminate\Database\Seeder;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(WebsiteService $service)
    {
        $created = 0;

        $websites = [
            [
                'name' => 'Humming Bird',
                'url' => 'https://hummingbird.com'
            ],
            [
                'name' => 'Aero Post',
                'url' => 'https://aeropost.com'
            ],
            [
                'name' => 'AutoWorld',
                'url' => 'https://autoworld.com'
            ],
            [
                'name' => 'Health News',
                'url' => 'https://healthnews.com'
            ]
        ];

        foreach ($websites as $website) {
            if (!$service->websiteExists($website['url'])) {
                $service->createNew($website['name'], $website['url']);
                $created ++;
            }
        }
        echo ($created . ' website(s) created' . "\n");
    }
}
