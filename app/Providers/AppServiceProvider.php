<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        //
        /*View::composer('*', function ($view) {
            $view->with('TaiKhoan', Auth::guard('TaiKhoanMD')->user());
        });*/
    }
}