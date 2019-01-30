<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_get_all_houses_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_get_lowest_price_houses_page()
    {
        $response = $this->get('/price');

        $response->assertStatus(200);
    }

    public function test_get_best_rating_houses_page()
    {
        $response = $this->get('/rating');

        $response->assertStatus(200);
    }

    public function test_get_best_quality_houses_page()
    {
        $response = $this->get('/quality');

        $response->assertStatus(200);
    }
}
