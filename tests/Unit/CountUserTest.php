<?php

namespace Tests\Unit;
use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountUser()
    {
        $users=User::all();
        $users->count();
        $this->assertEquals(50,count($users),"Should return 50 users");
    }
}
