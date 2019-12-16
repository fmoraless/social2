<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class CreateStatusTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_can_create_statuses()
    {
        $this->withExceptionHandling();

        // 1. Given => (teniendo un usuario autenticado)
        $user = factory(User::class)->create();
        $this->actingAs($user);

        // 2. When => Cuando (realizamos la accion) cuando hace un post request a status
        $this->post(route('statuses.store'), ['body' => 'Mi primer status']);

        // 3. Than => entonces veo un nuevo estado en la base de datos
        $this->assertDatabaseHas('statuses', [
            'user_id' => $user->id,
            'body' => 'Mi primer status'
        ]);
    }
}
