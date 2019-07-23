<?php

namespace Tests\Feature;

use App\CarBrand;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DB;

class Car_insertion_Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function countusers()
    {
        $count=CarBrand::table('car_brand')->count();
        $this->assertEquals(50,$count);
    }
    public function testExample()
    {
        $user = new CarBrand([
            'make'=>'asdcar',
            'model'=>'superasd',
            'year'=>'1980',
        ]);
        $user->save();
        $usertest = CarBrand::where('make','asdcar')->first();
        $this->assertInstanceOf("App\CarBrand",$usertest);

    }
    public function testswapyear()
    {
        CarBrand::where('make', 'asdcar')
            ->update(['year' => '2000']);
        $this->assertDatabaseHas('car_brands', [
            'year' => '2000'
        ]);
    }
    public function deletecar()
    {
        CarBrand::where('make', 'asdcar')
            ->delete();
        $this->assertDatabaseMissing('car_brands', [
            'make' => 'asdcar'
        ]);
    }
}
