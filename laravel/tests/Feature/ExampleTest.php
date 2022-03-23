<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_mypage_route()
    {
        $response = $this->get('/mypage');
        $response->assertStatus(200);
    }
    
    public function test_nonexistent_route()
    {
        $response = $this->get('/valami');
        $response->assertStatus(404);
    }
    
}
