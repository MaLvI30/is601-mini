<?php

namespace Tests\Unit;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModel()
    {
        $car = Car::all();
        $car = Car::find(17);
        $this->assertInternalType('string', $car->model);
    }
}
