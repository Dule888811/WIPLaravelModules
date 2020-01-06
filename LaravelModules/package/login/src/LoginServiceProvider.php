<?php
namespace Dule\Login;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class LoginServiceProvider extends ServiceProvider

{
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views', 'login');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

   
    public function register()
    {
      
    }
}