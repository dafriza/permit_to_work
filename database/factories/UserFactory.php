<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $job = Job::all()->random();
        // dd($job);
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'password' => Hash::make(1), // password
            'phone_number' => 0 . fake()->randomNumber(5, true) . fake()->randomNumber(5, true) . fake()->randomNumber(2, true),
            'address' => fake()->streetAddress(),
            'job_id' => $job['id'],
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
