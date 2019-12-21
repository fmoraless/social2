<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Throwable;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @test
     * @throws Throwable
     */
    public function registered_users_can_login()
    {
        factory(User::class)->create(['email' => 'fmorales@mail.com']);

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'fmorales@mail.com')
                    ->type('password', 'password')
                    ->press('#login-btn')
                    ->assertPathIs('/')
                    ->assertAuthenticated()
            ;
        });
    }
}
