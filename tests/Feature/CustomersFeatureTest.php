<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomersFeatureTest extends TestCase
{
    use RefreshDatabase;

   //displaying customers test
    /** @test */
     function user_can_see_all_customers()
    {
        //given users must exist
        $user = factory(\App\User::class)->create();
        //login the user
        $this->loginUser($user);
        // customer must exist
        $customers = factory(\App\Customer::class, 2)->create();   
        //when visiting customer using route
        $response = $this->get('customers');
        //then expect to see customer details
        $response->assertSee($customers[0]->name);
        $response->assertSee($customers[1]->name);
       
    }

    /** @test */
    function user_can_add_customer()
    {
        $this->withoutExceptionHandling();

        //given must have user
         $user = factory(\App\User::class)->create();
        //user must be logged in
         $this->loginUser($user);
        //array of values for new customer
         $new_customer = factory(\App\Customer::class)->make()->toArray();
        //when route to post customer
         $response = $this->post('customers', $new_customer);
        //then see customer in database
         $this->assertDatabaseHas('customers', $new_customer);
         //expect to be redirected to /customers
         $response->assertRedirect('customers'); 
    }

    public function loginUser($user)
    {
        $this->actingAs($user);
    }
}
