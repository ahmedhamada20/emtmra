<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory(50000)->make();
        // $chunks = $user->chunk(2000);
        // $chunks->each(function ($chunk) {
        //     User::insert($chunk->toArray());
        // });

        $this->call(SettingSeeder::class);
        $this->call(AdminLoginSeeder::class);
        $this->call(SectionOneSeeder::class);
        $this->call(SectionEightSeeder::class);
//        $this->call(CustomerSeeder::class);
//        $this->call(PageSeeder::class);
//        $this->call(ClientSeeder::class);
    }
}
