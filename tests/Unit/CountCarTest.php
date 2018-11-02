<?php

namespace Tests\Unit;
use App\Car;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCar()
    {
        $cars=Car::all();
        $cars->count();
        $this->assertEquals(50,count($cars),"Should return 50 cars");
    }
}
