<?php

namespace Slm\B2bApi\Tests;

use Orchestra\Testbench\TestCase;
use Slm\B2bApi\B2bApiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [B2bApiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
