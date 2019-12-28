<?php

namespace Tests\Feature;

use App\Models\Status;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanLikeStatusesTest extends TestCase
{

    use RefreshDatabase;


    /** @test */
    public function guests_users_can_not_like_statuses()
    {
        $status = factory(Status::class)->create();

        $response = $this->post(route('statuses.likes.store', $status));

        $response->assertRedirect('login');
    }


    /**
     *
     * @test
     */
    public function an_authenticated_user_can_be_like()
    {
        //desabilita el manejo de excepciones.
        $this->withoutExceptionHandling();

        $user = factory(User::class)->create();
        $status = factory(Status::class)->create();

        $this->actingAs($user)->postJson(route('statuses.likes.store', $status));

        $this->assertDatabaseHas('likes', [
           'user_id' => $user->id,
           'status_id' => $status->id
        ]);
    }

}
