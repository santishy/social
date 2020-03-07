<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *@test
     * @return void
     */
    public function registered_users_can_login()
    {
      factory(User::class)->create(['email' => 'santi_shy@hotmail.com']);
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email','santi_shy@hotmail.com')
                    ->type('password','password')
                    ->press('#login-btn')
                    ->assertAuthenticated();
        });
    }
}
