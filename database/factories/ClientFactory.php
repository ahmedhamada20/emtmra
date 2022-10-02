<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->name,
            'email'=> fake()->unique()->safeEmail,
            'phone'=> fake()->numberBetween(102154512,2848878545),
            'code'=> fake()->numberBetween(55554454545454587,984512308523),
            'data'=> date('Y-m-d'),
            'time'=> date('H'),
            'page_id'=> Page::all()->random()->id,
        ];
    }
}
