<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_cant_get_home_page_example()
    {
        $response = $this->get('/');
        // we can test this   route
        // $response = $this->get('/test');

        $response->assertStatus(200);
        // we can test this   route
        // $response->assertStatus(404);
    }
}
