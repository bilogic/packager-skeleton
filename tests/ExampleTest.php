<?php

namespace :uc:vendor\:uc:package\Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends :uc:vendor\:uc:package\Tests\Support\TestCaseWithLaravel;
{
    use \Illuminate\Foundation\Testing\LazilyRefreshDatabase;
    use \Illuminate\Foundation\Testing\DatabaseMigrations;

    public function test_true_is_true(): void
    {
        self::assertTrue(true);
    }
}
