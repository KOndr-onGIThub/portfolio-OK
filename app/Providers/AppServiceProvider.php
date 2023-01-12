<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\MyUtilities\DateUtils;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // AKTUÁLNÍ DATUM K DISPOZICI NA VŠECH VIEWS
        $dateTime = DateUtils::formatDate( date("Y-m-d H:i:s") );
        View::share('dateTime', $dateTime);
    }
}
