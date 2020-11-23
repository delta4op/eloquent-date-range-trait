<?php

namespace Gitwithravish\EloquentDateRangeTrait\Tests;

use Orchestra\Testbench\TestCase;
use Gitwithravish\EloquentDateRangeTrait\EloquentDateRangeTraitServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [EloquentDateRangeTraitServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
