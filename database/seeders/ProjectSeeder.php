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
                'title' => ($title = 'My Connectors Travel'),
                'slug' => $title,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
                'technology' => 'Laravel|Tailwind|SplideJs',
                'active' => 1,

            ],
            [
                'title' => ($title = 'joshua Omido.com'),
                'slug' => $title,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
                'technology' => 'Laravel|Tailwind|SplideJs|AlpineJs',
                'active' => 1,

            ],
            [
                'title' => ($title = 'React Application'),
                'slug' => $title,
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eos iure vel, dolore doloribus quaerat! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia explicabo labore saepe dolores, aut nam.',
                'technology' => 'Laravel|Tailwind|React|Redux',
                'active' => 1,

            ]
        ];
        foreach($projects as $index => $project){
            $project = Project::create($project);
            $project->copyMedia(new \Illuminate\Http\File($images[$index]))->toMediaCollection('image');
        }
    }
}
