<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer([
            'web.includes.topbar',
            'web.includes.navbar',
            'web.includes.footer'
        ], 'App\Http\Composers\MenuComposer');

        View::composer([
            'web.includes.home-slider'
        ], 'App\Http\Composers\HomeSliderComposer');

    }
}