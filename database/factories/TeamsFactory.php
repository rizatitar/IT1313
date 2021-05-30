<?php

namespace Database\Factories\Models;

use App\Models\Models\Teams;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teams::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->word
        ];
    }
}
