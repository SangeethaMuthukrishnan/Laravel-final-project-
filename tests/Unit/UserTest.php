<?php

namespace Tests\Unit;

use App\Models\Registerform;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->get('/login-page');
        $response->assertStatus(200);
    }
    public function test_user_duplication()
    {
        $user1=Registerform::make
        ([
            'email'=>'geeta@gmail.com',

        ]);

       $user2=Registerform::make
       ([
           'email'=>'neha@gmail.com',
       ]);

       $this->assertTrue($user1->email != $user2->email);

    }
    //http test(post_method)

     public function test_its_store_new_users()
     {
        $response=$this->post('/registration-details-store',[
            'first_name'=>'Laila',
            'last_name'=>'sudha',
            'company'=>'France tech',
            'email'=>'laila@gmail.com',
            'phone'=>'8934445236',
            'password'=>'Laila22@',


        ]);
        $response->assertRedirect('/client-dashboard');
     }


}
