<?php

namespace Database\Seeders;

use App\Models\SectionOne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionOne::create([
            'title' => ['ar'=>'title','en'=>'title_en'],
            'notes' => ['ar'=>'notes','en'=>'notes_en'],
        ]);
    }
}
