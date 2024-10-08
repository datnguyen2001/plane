<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('ve-chung-toi', [HomeController::class, 'about'])->name('about');
Route::get('giay-chung-nhan', [HomeController::class, 'certificate'])->name('certificate');
Route::get('tro-thanh-phi-cong', [HomeController::class, 'becomePilot'])->name('become-pilot');
Route::get('mot-ngay-tro-thanh-phi-cong', [HomeController::class, 'onDayPilot'])->name('one-day-pilot');
Route::get('tin-tuc', [HomeController::class, 'news'])->name('new');
Route::get('chi-tiet-tin-tuc/{slug}', [HomeController::class, 'detailNew'])->name('detail-new');
Route::get('lien-he', [HomeController::class, 'contact'])->name('contact');
Route::get('khoa-huan-luyen', [HomeController::class, 'trainingCourse'])->name('training-course');
Route::get('khoa-huan-luyen/{slug}', [HomeController::class, 'detailTrainingCourse'])->name('detail-training-course');
Route::get('tim-kiem', [HomeController::class, 'search'])->name('search');
Route::post('save-contact', [HomeController::class, 'saveContact'])->name('save-contact');
Route::post('save-information', [HomeController::class, 'saveInformation'])->name('save-information');

Route::middleware('auth')->group(function () {

});
