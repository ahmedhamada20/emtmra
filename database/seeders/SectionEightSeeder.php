<?php

namespace Database\Seeders;

use App\Models\SectionEight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionEightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionEight::create([
'title' => 'title',
'notes' => 'notes',
'photo' => 'photo',
        ]);
    }
}
