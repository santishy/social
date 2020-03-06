<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UsersCanCreateStatusesTest extends DuskTestCase
{
  use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(User::class)->create();
        $this->browse(function (Browser $browser) use ($user)  {
            $browser->loginAs($user)
                    ->visit('/')
                    ->type('body','Mi primer status')
                    ->press('#create-status')
                    ->screenShot('create-status')
                    ->assertSee('Mi primer status');
        });
    }
}
