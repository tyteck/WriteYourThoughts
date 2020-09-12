<?php

namespace Tyteck\WriteYourThoughts;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Tyteck\WriteYourThoughts\Http\Controllers\ThoughtsController;

class ThoughtsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'thoughts');

        /**
         * this allow package user to publish views and edit them as he wants
         */
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/thoughts'),
        ], 'views');

        /**
         * this allow package user to publish config and edit it as he wants
         */
        $this->publishes([
            __DIR__ . '/../config/thoughts.php' => base_path('config/thoughts.php'),
        ], 'config');

        /**
         * Those are the routes user wil be able to use.
         */
        Route::resource(config('thoughts.route'), ThoughtsController::class)->only([
            'index',
            'show',
            'create',
            'edit',
            'update',
        ]);
    }

    public function register()
    {
        $this->app->bind('thoughts', function () {
            return new ThoughtsFactory();
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/thoughts.php', 'thoughts');
    }
}
