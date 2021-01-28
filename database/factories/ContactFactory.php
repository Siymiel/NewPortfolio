<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => ($full_name = $this->faker->fullName()),
            'slug' => $full_name,
            'email' => $this->faker->freeEmail,
            'phone_number' => $this->faker->tollFreePhoneNumber,
            'message' => $this->faker->paragraphs(2, true),
        ];
    }
}
