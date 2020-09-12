<?php

namespace Tyteck\WriteYourThoughts\Facades;

use Illuminate\Support\Facades\Facade;

class Thoughts extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'thoughts';
    }
}