<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = \Illuminate\Support\Facades\File::allFiles(public_path('/images/dummy/projects'));
        $projects = [
            [
                'title' => ($title = 'Sahl Health'),
                'slug' => $title,
                'body' => 'Sahl Health is a Kenyan-based digital health innovation startup founded in the year 2019.The clients wanted a digital ecosystem that improves access and convenience to medical care, builds trust between patients and health service providers enabling predictable, competitive medical costs allowing patients to have a variety of spending options including medical price bidding.',
                'technology' => 'WordPress | Tailwind | SplideJs',
                'link' => 'www.sahlhealth.com',
                'active' => 1,

            ],
            [
                'title' => ($title = 'Duka Group'),
                'slug' => $title,
                'body' => 'Duka Group is a chain of green grocery stores located close to residential areas and fuel stations. I single handedly developed the site by creating a Landing page that showcases the clients aim in the business as well as collected emails from subscribers.',
                'technology' => 'WordPress | Tailwind | SplideJs | AlpineJs',
                'link' => 'www.dukagroup.com',
                'active' => 1,

            ],
            [
                'title' => ($title = 'Lwanda BioTech'),
                'slug' => $title,
                'body' => 'Lwanda Biotech is an environmental remediation social enterprise startup tackling the pollution problem in Sub-Saharan Africa. ',
                'technology' => 'WordPress | Tailwind | ALpineJs | SplideJs',
                'link' => 'www.lwandabiotech.com',
                'active' => 1,

            ],
            // [
            //     'title' => ($title = 'Sherehe'),
            //     'slug' => $title,
            //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
            //     'technology' => 'Laravel | Tailwind | LiveWire | SplideJs',
            //     'link' => 'www.lwandabiotech.com',
            //     'active' => 1,

            // ]
        ];
        foreach($projects as $index => $project){
            $project = Project::create($project);
            $project->copyMedia(new \Illuminate\Http\File($images[$index]))->toMediaCollection('image');
        }
    }
}
