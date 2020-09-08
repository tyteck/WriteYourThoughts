<?php

namespace Tyteck\WriteYourThoughts;

use Illuminate\Support\ServiceProvider;

class ThoughtsServiceProvider extends ServiceProvider{


    public function boot()
    {
        //code
    }

    public function register()
    {
        $this->app->bind('thoughts', function () {
            return new Thoughts();
        });
    }
}