<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Factories\UserFactory;
use Tests\TestCase;
use App\Models\User;
use App\Models\Book;
use Laravel\Passport\Passport;


class BookTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    // public function test_user_auth_can_list_books()
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    // }

    public function test_user_auth_can_view_detail()
    {
    
        $user = User::factory()->create();
        Passport::actingAs($user);


        $response = $this->json('GET', '/api/v1/user');


        $response->assertStatus(200);

    }
    
    public function test_user_auth_can_view_specifique_book()
    {
    
        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->json('GET', '/api/v1/books/1');

        $response->assertStatus(200);

    }


    



}
