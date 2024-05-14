<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;




class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserRegistration()
    { // Simula dados de usuário para registro
        $userData = [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
        ];

        // Cria uma instância do controlador de usuários
        $controller = new UsersController();

        // Simula uma requisição HTTP com os dados do usuário
        $request = new Request([], $userData);

        // Chama o método de registro de usuário no controlador
        $response = $controller->register($request);

        // Verifica se o registro foi bem-sucedido
        $this->assertEquals(201, $response->getStatusCode());

        // Verifica se o token de acesso foi retornado
        $responseData = $response->getData(true);
        $this->assertArrayHasKey('access_token', $responseData);
    }
}
