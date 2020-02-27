<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        //setting language
        if(isset($_COOKIE['language'])) {
            \App::setLocale($_COOKIE['language']);
        } else {
            \App::setLocale('en');
        }
        //get general setting value        
        $general_setting = DB::table('general_settings')->latest()->first();
        View::share('general_setting', $general_setting);
        config(['staff_access' => $general_setting->staff_access, 'date_format' => $general_setting->date_format]);
        
        $alert_product = DB::table('products')->where('is_active', true)->whereColumn('alert_quantity', '>', 'qty')->count();
        View::share('alert_product', $alert_product);
        Schema::defaultStringLength(191);
    }
}
