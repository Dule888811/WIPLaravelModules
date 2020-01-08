<?php
namespace Dule\Humanity;
use Illuminate\Support\ServiceProvider;

class HumanityServiceProvider extends ServiceProvider

{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__. '/views', 'humanity');
    }

   
    public function register()
    {
      
    }
}