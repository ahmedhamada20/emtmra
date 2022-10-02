<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Customer = Customer::factory(50)->make();
        $chunks = $Customer->chunk(20);
        $chunks->each(function ($chunk) {
            Customer::insert($chunk->toArray());
        });
    }
}
