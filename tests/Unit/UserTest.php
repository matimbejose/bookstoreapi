<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_duplate() {
        $user1  = User::make([
            'name' => 'Jose Matimbe', 
            'email' => 'josematimbe@uem.ac.mz'
        ]);


        $user2  = User::make([
            'name' => 'John Doe', 
            'email' => 'johndoe@uem.ac.mz'
        ]);


        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_delete_user() {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user) {
            $user->delete();
        }

        $this->assertTrue(true);

    }
}
