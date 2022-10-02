<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name_site' => 'test',
            'title' => 'test',
            'notes' => 'test',
            'phone' => '0111111',
            'facebook' => 'test',
            'url' => 'test',
            'photo_navbar' => 'test',
            'photo_cover' => 'test',
            'photo_site' => 'test',
        ]);
    }
}
