<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class InspiringCommandTest extends TestCase
{
    /**
     * A basic test example.
     * @return void
     */
    public function testInspiringCommand()
    {
        $this->artisan('inspiring')
             ->expectsOutput('Simplicity is the ultimate sophistication.')
             ->assertExitCode(0);
    }
}
