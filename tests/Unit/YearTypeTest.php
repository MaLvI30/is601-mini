<?php

namespace Tests\Unit;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class YearTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testYearType()
    {
        $car = Car::find(36);
        $this->assertInternalType('numeric',$car->year);
    }
}
