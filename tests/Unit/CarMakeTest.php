<?php

namespace Tests\Unit;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = Car::inRandomOrder()->first();
        if ($car->make = "Honda") {
            $this->assertTrue(true);
        }
        elseif ($car->make = "Toyota") {
            $this->assertTrue(true);
        }
        else ($car->make = "Ford");
        {
            $this->assertTrue(true);
        }
    }
}
