<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\ArticlesController;


class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        require_once (app_path() . '/Includes/helpers.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->when(ArticlesController::class)
                ->needs('App\Includes\Classes\InterfaceCounter')
                ->give('App\Includes\Classes\Counter');
      
          $this->app->bind('App\Includes\Classes\InterfaceCounter', 
                'App\Includes\Classes\Counter_1');
    }
    

}
