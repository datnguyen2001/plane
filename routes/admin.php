<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\LoginController;
use \App\Http\Controllers\admin\DashboardController;
use \App\Http\Controllers\admin\SettingController;
use \App\Http\Controllers\admin\BannerController;
use \App\Http\Controllers\admin\PartnerController;
use \App\Http\Controllers\admin\NewController;
use \App\Http\Controllers\admin\AboutController;
use \App\Http\Controllers\admin\ImageAboutController;
use \App\Http\Controllers\admin\CertificateController;
use \App\Http\Controllers\admin\OneDayPilotController;
use \App\Http\Controllers\admin\TrainingCourseController;
use \App\Http\Controllers\admin\BecomePilotController;


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/dologin', [LoginController::class, 'doLogin'])->name('doLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('check-admin-auth')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');

    Route::prefix('banner')->name('banner.')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::get('create', [BannerController::class, 'create'])->name('create');
        Route::post('store', [BannerController::class, 'store'])->name('store');
        Route::get('delete/{id}', [BannerController::class, 'delete']);
        Route::get('edit/{id}', [BannerController::class, 'edit']);
        Route::post('update/{id}', [BannerController::class, 'update']);
    });

    Route::prefix('partner')->name('partner.')->group(function () {
        Route::get('/', [PartnerController::class, 'index'])->name('index');
        Route::get('create', [PartnerController::class, 'create'])->name('create');
        Route::post('store', [PartnerController::class, 'store'])->name('store');
        Route::get('delete/{id}', [PartnerController::class, 'delete']);
        Route::get('edit/{id}', [PartnerController::class, 'edit']);
        Route::post('update/{id}', [PartnerController::class, 'update']);
    });

    Route::prefix('about')->name('about.')->group(function () {
        Route::get('', [AboutController::class, 'index'])->name('index');
        Route::post('update', [AboutController::class, 'save'])->name('update');
    });

    Route::prefix('image-about')->name('image-about.')->group(function () {
        Route::get('/', [ImageAboutController::class, 'index'])->name('index');
        Route::get('create', [ImageAboutController::class, 'create'])->name('create');
        Route::post('store', [ImageAboutController::class, 'store'])->name('store');
        Route::get('delete/{id}', [ImageAboutController::class, 'delete']);
        Route::get('edit/{id}', [ImageAboutController::class, 'edit']);
        Route::post('update/{id}', [ImageAboutController::class, 'update']);
    });

    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', [NewController::class, 'index'])->name('index');
        Route::get('create', [NewController::class, 'create'])->name('create');
        Route::post('store', [NewController::class, 'store'])->name('store');
        Route::get('delete/{id}', [NewController::class, 'delete']);
        Route::get('edit/{id}', [NewController::class, 'edit']);
        Route::post('update/{id}', [NewController::class, 'update']);
    });

    Route::prefix('certificate')->name('certificate.')->group(function () {
        Route::get('', [CertificateController::class, 'index'])->name('index');
        Route::post('update', [CertificateController::class, 'save'])->name('update');
    });

    Route::prefix('become-pilot')->name('become-pilot.')->group(function () {
        Route::get('', [BecomePilotController::class, 'index'])->name('index');
        Route::post('update', [BecomePilotController::class, 'save'])->name('update');
    });

    Route::prefix('one-day-pilot')->name('one-day-pilot.')->group(function () {
        Route::get('', [OneDayPilotController::class, 'index'])->name('index');
        Route::post('update', [OneDayPilotController::class, 'save'])->name('update');
    });

    Route::prefix('training-course')->name('training-course.')->group(function () {
        Route::get('/', [TrainingCourseController::class, 'index'])->name('index');
        Route::get('create', [TrainingCourseController::class, 'create'])->name('create');
        Route::post('store', [TrainingCourseController::class, 'store'])->name('store');
        Route::get('delete/{id}', [TrainingCourseController::class, 'delete']);
        Route::get('edit/{id}', [TrainingCourseController::class, 'edit']);
        Route::post('update/{id}', [TrainingCourseController::class, 'update']);
    });

    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('', [SettingController::class, 'index'])->name('index');
        Route::post('update', [SettingController::class, 'save'])->name('update');
    });

    Route::get('contact', [DashboardController::class, 'contact'])->name('contact');
    Route::get('register_information', [DashboardController::class, 'registerInformation'])->name('register_information');

});

Route::post('ckeditor/upload', [DashboardController::class, 'upload'])->name('ckeditor.image-upload');
