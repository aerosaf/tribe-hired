<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_house_owner()
    {
        $user = factory(\App\House::class)->create([
            'owner' => 'unitTest'
        ]);
        $this->assertDatabaseHas('houses', ['owner' => 'unitTest']);
    }
}
