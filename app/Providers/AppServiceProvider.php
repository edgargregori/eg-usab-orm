<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
//=======
//>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//<<<<<<< HEAD
	schema::defaultStringLength(191);
//=======
//>>>>>>> f4d887ac00fcaba6069cc713b52ec7c9f44fec95
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
