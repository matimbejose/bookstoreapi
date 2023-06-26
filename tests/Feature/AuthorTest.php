<?php

namespace Tests\Feature;

use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
use Laravel\Passport\Passport;


class AuthorTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_user_auth_can_view_detail()
    {
    
        $user = User::factory()->create();
        Passport::actingAs($user);


        $response = $this->json('GET', '/api/v1/user');


        $response->assertStatus(200);

    }
    
    public function test_user_not_auth_can_view_specifique_auhor()
    {
    
        $response = $this->json('GET', '/api/v1/authors/1');

        $response->assertStatus(401);

    }



}
