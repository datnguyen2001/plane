<?php

namespace App\Providers;

use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\SettingModel;
use App\Models\TrainingCourseModel;
use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }



    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
//        $setting = SettingModel::first();
//        $menuHeader = TrainingCourseModel::select('title', 'slug')
//            ->where('display', 1)
//            ->where('type', 1)
//            ->take(2)
//            ->get();
        $setting = null;
        $menuHeader=[];

        view()->share('setting', $setting);
        view()->share('menuHeader', $menuHeader);
    }
}
