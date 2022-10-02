<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use App\Models\SectionEight;
use App\Models\SectionFive;
use App\Models\SectionFour;
use App\Models\SectionOne;
use App\Models\SectionSeven;
use App\Models\SectionSix;
use App\Models\SectionThere;
use App\Models\SectionTwo;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

    public function showSetting()
    {

        $data = [
            'setting' => Setting::whereNull('page_id')->first(),
            'navbars' => Navbar::whereNull('page_id')->get(),
            'sectionsOne' => SectionOne::whereNull('page_id')->get(),
            'sectionstwo' => SectionTwo::whereNull('page_id')->get(),
            'sectionsthere' => SectionThere::whereNull('page_id')->get(),
            'sectionsfours' => SectionFour::whereNull('page_id')->get(),
            'sectionsfives' => SectionFive::whereNull('page_id')->get(),
            'sectionssix' => SectionSix::whereNull('page_id')->get(),
            'sectionsseven' => SectionSeven::whereNull('page_id')->get(),
            'sectionseights' => SectionEight::whereNull('page_id')->get(),
        ];

        return view('admin.setting.index', $data);
    }
}
