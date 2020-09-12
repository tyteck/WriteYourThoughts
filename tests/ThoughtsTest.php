<?php

namespace Tyteck\WriteYourThoughts\Tests;

use Tyteck\WriteYourThoughts\Thoughts;
use Tyteck\WriteYourThoughts\ThoughtsServiceProvider;

class ThoughtsTest extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            ThoughtsServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Thoughts' => Thoughts::class,
        ];
    }


    public function testAnyoneCanListYourThoughts()
    {
        $this->get('thoughts')->assertStatus(200);
    }
}
