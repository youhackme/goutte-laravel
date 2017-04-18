<?php

/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/04/2017
 * Time: 17:24
 */

namespace Toggle\Goutte;

use Illuminate\Support\ServiceProvider;

class GoutteServiceProvider extends ServiceProvider
{

    protected $defer;

    public function register()
    {
        $this->app->singleton('goutte', function ($app) {
            return new \Goutte\Client();
        });

        $this->app->alias('goutte', 'Goutte\Client');
    }


    public function provides()
    {
        return ['goutte'];
    }

}