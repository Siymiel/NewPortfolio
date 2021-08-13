<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title' => ($title = 'Web Design'),
                'slug' => $title,
                'caption' => 'UI | UX',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Web Development'),
                'slug' => $title,
                'caption' => 'Custom development',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Mpesa Intergration'),
                'slug' => $title,
                'caption' => 'C2B | B2B | B2C',
                'active' => 1,
            ],
            [
                'title' => ($title = 'SEO'),
                'slug' => $title,
                'caption' => 'SERPs | Keywords | Backlinks',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Website Maintainance'),
                'slug' => $title,
                'caption' => 'Performance | Updates | Backup restoration',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Google Analytics'),
                'slug' => $title,
                'caption' => 'Funnels | Metrics',
                'active' => 1,
            ],
            [
                'title' => ($title = 'WordPress'),
                'slug' => $title,
                'caption' => 'Custom Theme development | Landing Pages',
                'active' => 1,
            ]
        ];

        foreach($services as $service){
            $service = Service::create($service);
        }
    }
}
