<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->name(),
            'email'=> fake()->unique()->safeEmail(),
            'phone'=> fake()->numberBetween(1000000000,900000000),
            'code'=> fake()->numberBetween(58254545452148,76132169498781),
            'sloppy'=> fake()->name(),
            'jops'=> fake()->name(),
            'type'=> fake()->randomElement(['Business_Administration','commercial_arbitration','Diplomatic_relations','Human_Resource_Management']),
            'data'=> date('Y-m-d'),
            'time'=> date('H'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
    }
}
