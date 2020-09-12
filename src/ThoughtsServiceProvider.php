<?php

namespace Tyteck\WriteYourThoughts;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Tyteck\WriteYourThoughts\Http\Controllers\ThoughtsController;

class ThoughtsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::resource('thoughts', ThoughtsController::class)->only([
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
            return new Thoughts();
        });
    }
}
