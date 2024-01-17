<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Additional;
use App\Models\Upper;
use App\Models\Bottom;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Outfit>
 */
class OutfitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'upper_id' => Upper::all()->random()->upper_id,
            'bottom_id' => Bottom::all()->random()->bottom_id,
            'status' => fake()->boolean(),
            'additional_id' => Additional::all()->random()->additional_id,
        ];
    }
}
