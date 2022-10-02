<?php

use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\RegisterController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use RealRashid\SweetAlert\Facades\Alert;



/*
انشاء صفحه وانشاء التفاصيل الخاصه بها كامل
رفع وتنزيل الاكسل بكافه المطلبات
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
   

    Route::get('/', [HomeController::class, 'index'])->name('home');



    Route::view('ahmedhamada', 'pages.namePage.master');

});
