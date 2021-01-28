<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectSeederFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => ($title = $this->faker->words(2)),
            'slug' => $title,
            'body' => $this->faker->paragraphs(3, true),
            'technology' => $this->faker->words(3, true),
            'link' => $this->faker->url(),
            'active' => true,
        ];
    }
}
