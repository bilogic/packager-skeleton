<?php

namespace :uc:vendor\:uc:package\Tests\Support;

abstract class TestCaseWithLaravel extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            // add your required service providers here
        ];
    }
}
