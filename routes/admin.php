<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DayCustomerController;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NavbarController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\Section1Controller;
use App\Http\Controllers\Admin\Section2Controller;
use App\Http\Controllers\Admin\Section3Controller;
use App\Http\Controllers\Admin\Section4Controller;
use App\Http\Controllers\Admin\Section5Controller;
use App\Http\Controllers\Admin\Section6Controller;
use App\Http\Controllers\Admin\Section7Controller;
use App\Http\Controllers\Admin\Section8Controller;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Home\RegisterController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

I used the Alerga library to fetch data from Database,س
 and I also used the Laravel Excel library to upload and export the data.


*/

require __DIR__ . '/auth.php';



Route::resource('register',RegisterController::class);
Route::post('pagesRegister',[RegisterController::class,'pagesRegister'])->name('pagesRegister');

Route::middleware('auth')->prefix('admin')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/showSetting', [HomeController::class, 'showSetting'])->name('showSetting');

    Route::resource('custmoer', CustomerController::class);
    Route::get('upload_custmoer', [CustomerController::class,'upload_custmoer'])->name('upload_custmer');
    Route::post('updated',[CustomerController::class,'updated'])->name('updated');
    Route::get('/download/ecxel',[CustomerController::class,'downloadExel'])->name('downloadExel');
    Route::get('/download/ecxel/time',[CustomerController::class,'downloadExelTime'])->name('downloadExelTime');
    Route::get('custmoer_time_data',[CustomerController::class,'custmoer_time_data'])->name('custmoer_time_data');


    Route::resource('pages',PageController::class);

    Route::resource('information',FormController::class);

    Route::resource('client',ClientController::class);
    Route::post('client/upload',[ClientController::class,'clientUpload'])->name('clientUpload');
    Route::get('/clientDownload',[ClientController::class,'clientDownload'])->name('clientDownloadC');

    Route::resource('setting', SettingController::class);
    Route::resource('section2', Section2Controller::class);
    Route::resource('navbar', NavbarController::class);
    Route::resource('section1', Section1Controller::class);
    Route::resource('section3', Section3Controller::class);
    Route::resource('section4', Section4Controller::class);
    Route::resource('section5', Section5Controller::class);
    Route::resource('section6', Section6Controller::class);
    Route::resource('section7', Section7Controller::class);
    Route::resource('section8', Section8Controller::class);

});

