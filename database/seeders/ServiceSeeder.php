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
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Web Development'),
                'slug' => $title,
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
                'active' => 1,
            ],
            [
                'title' => ($title = 'Mpesa Intergration'),
                'slug' => $title,
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
                'active' => 1,
            ],
            [
                'title' => ($title = 'SEO'),
                'slug' => $title,
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
                'active' => 1,
            ]
        ];

        foreach($services as $service){
            $service = Service::create($service);
        }
    }
}
