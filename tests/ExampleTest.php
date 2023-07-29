<?php

namespace :uc:vendor\:uc:package\Tests;

class ExampleTest extends TestbenchTestCase
{
    use \Illuminate\Foundation\Testing\LazilyRefreshDatabase;
    use \Illuminate\Foundation\Testing\DatabaseMigrations;

    public function test_true_is_true(): void
    {
        self::assertTrue(true);
    }
}
