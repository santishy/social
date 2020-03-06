<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateStatusTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     *@test
     */
    public function an_authenticated_user_can_create_statuses()
    {
      //$this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $response = $this->postJson(route('statuses.store'),['body' => 'Mi primer status']);
        $response->assertJson([
          'body' => 'Mi primer status'
        ]);
        $this->assertDatabaseHas('statuses',
          ['body' => 'Mi primer status',
           'user_id' => $user->id ]);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     *@test
     */
    public function guests_users_can_no_create_statuses(){
      $this->withoutExceptionHandling();
      $response = $this->post(route('statuses.store'),['body' => 'Mi primer status']);
      $response->assertRedirect('login');
    }
    /**
     * A basic feature test example.
     *
     * @return void
     *@test
     */
    public function a_status_requires_a_body(){
      //$this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $this->actingAs($user);
        $response = $this->postJson(route('statuses.store'),['body' => '']);

        $response->assertStatus(422);

        $response->assertJsonStructure([
          'errors' =>['body']
        ]);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     *@test
     */
    public function a_status_requires_a_minimum_of_length(){
      $user = factory(User::class)->create();
      $this->actingAs($user);
      $response = $this->postJson(route('statuses.store'),['body' => 'adgs']);

      $response->assertStatus(422);

      $response->assertJsonStructure([
        'errors' =>['body']
      ]);
    }
}
