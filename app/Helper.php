<?php

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
use Illuminate\Support\Facades\Session;


if (!function_exists('getSettingMasterHome')) {
    function getSettingMasterHome()
    {
        $setting = Setting::whereNull('page_id')->first();
        return $setting;
    }
}

if (!function_exists('getNavbar')) {
    function getNavbar()
    {
        $navbar = Navbar::whereNull('page_id')->inRandomOrder()->limit(6)->get();
        return $navbar;
    }
}

if (!function_exists('getSectionOne')) {
    function getSectionOne()
    {
        $SectionOne = SectionOne::whereNull('page_id')->inRandomOrder()->limit(1)->first();
        if ($SectionOne != null) {
            return $SectionOne;
        }
    }
}

if (!function_exists('getSectionTwo')) {
    function getSectionTwo()
    {
        $SectionTwo = SectionTwo::whereNull('page_id')->inRandomOrder()->limit(12)->get();
        return $SectionTwo;
    }
}

if (!function_exists('getSectionTheres')) {
    function getSectionTheres()
    {
        $SectionTheres = SectionThere::whereNull('page_id')->inRandomOrder()->limit(4)->get();
        return $SectionTheres;
    }
}

if (!function_exists('getSectionFour')) {
    function getSectionFour()
    {
        $SectionFour = SectionFour::whereNull('page_id')->inRandomOrder()->limit(4)->get();
        return $SectionFour;
    }
}

if (!function_exists('getSectionfives')) {
    function getSectionfives()
    {
        $Sectionfives = SectionFive::whereNull('page_id')->inRandomOrder()->limit(2)->get();
        return $Sectionfives;
    }
}

if (!function_exists('getSectionsix')) {
    function getSectionsix()
    {
        $Sectionsix = SectionSix::whereNull('page_id')->inRandomOrder()->limit(12)->get();
        return $Sectionsix;
    }
}
if (!function_exists('getSectionseven')) {
    function getSectionseven()
    {
        $Sectionseven = SectionSeven::whereNull('page_id')->inRandomOrder()->limit(2)->get();
        return $Sectionseven;
    }
}
if (!function_exists('getSectioneight')) {
    function getSectioneight()
    {
        $Sectioneight = SectionEight::whereNull('page_id')->inRandomOrder()->limit(1)->first();
        return $Sectioneight;
    }
}
