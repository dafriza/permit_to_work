<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\PtwDummy;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PtwDummy>
 */
class PtwDummyFactory extends Factory
{
    protected $ptw_dummy = PtwDummy::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project' => $this->faker->companySuffix,
            'employee_name' => $this->faker->firstName(),
            'start_date' => $this->faker->dateTime(),
            'status' => $this->faker->randomElement(['approved', 'rejected', 'on going', 'draft']),
            
        ];
    }
}
