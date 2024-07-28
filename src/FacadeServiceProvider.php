<?php
namespace Deniscosmin21\LogService;

use Illuminate\Support\ServiceProvider;
use Deniscosmin21\LogService\LogService;
use Illuminate\Foundation\AliasLoader;

class FacadeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('log', function($app) {
            return new LogService();
        });
        AliasLoader::getInstance()->alias('LogData', \Deniscosmin21\LogService\Facades\LogService::class);
    }
 
    public function boot()
    {
        
    }
}