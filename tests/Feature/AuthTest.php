<?php

namespace Tests\Feature;

use Auth\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAuth()
    {
        $response = $this->post(route('auth'));

        User::create([
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => \bcrypt('password'),
        ]);

        $response->assertStatus(200);
    }
}
