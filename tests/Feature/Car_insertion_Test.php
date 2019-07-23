<?php

namespace Tests\Feature;

use App\CarBrand;
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
    public function testExample()
    {
        $user = new CarBrand([
            'make'=>'asdcar',
            'model'=>'superasd',
            'year'=>random_int(1999,2005),
        ]);
        $user->save();
        $usertest = CarBrand::where('make','asdcar')->first();
        $this->assertInstanceOf("App\CarBrand",$usertest);

    }

}
