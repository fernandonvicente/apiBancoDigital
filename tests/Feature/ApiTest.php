<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSaldo()
    {
      $response = $this->get('/api/saldo/6874');

      $response->assertStatus(200);

    }

    public function testSacar()
    {
        $response = $this->get('/api/sacar/6874/100');

        $response->assertStatus(200);
    }

    public function testDepositar()
    {
        $response = $this->get('/api/depositar/6874/100');

        $response->assertStatus(200);
    }
}
