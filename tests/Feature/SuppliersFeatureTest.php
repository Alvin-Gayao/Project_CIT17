<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuppliersFeatureTest extends TestCase
{
   use RefreshDatabase;

   //displaying suppliers test
    /** @test */
     function user_can_see_all_suppliers()
    {
        //given users must exist
        $user = factory(\App\User::class)->create();
        //login the user
        $this->loginUser($user);
        // supplier must exist
        $suppliers = factory(\App\Supplier::class, 2)->create();   
        //when visiting supplier using route
        $response = $this->get('suppliers');
        //then expect to see supplier details
        $response->assertSee($suppliers[0]->name);
        $response->assertSee($suppliers[1]->name);
       
    }

    /** @test */
    function user_can_add_supplier()
    {
        $this->withoutExceptionHandling();

        //given must have user
         $user = factory(\App\User::class)->create();
        //user must be logged in
         $this->loginUser($user);
        //array of values for new supplier
         $new_supplier = factory(\App\Supplier::class)->make()->toArray();
        //when route to post supplier
         $response = $this->post('suppliers', $new_supplier);
        //then see supplier in database
         $this->assertDatabaseHas('suppliers', $new_supplier);
         //expect to be redirected to /suppliers
         $response->assertRedirect('suppliers'); 
    }

    public function loginUser($user)
    {
        $this->actingAs($user);
    }
}
