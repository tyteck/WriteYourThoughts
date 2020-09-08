<?php

namespace Tyteck\WriteYourThoughts\Facades;

use Illuminate\support\Facades\Facade;

class Thoughts extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return 'thoughts';
    }
}