<?php

namespace Tests\Feature;

use App\CarBrand;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use DB;

class user_insertion_Test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testcountusers ()
    {
        $count=User::count('users');
        $this->assertEquals(50, $count);
    }
    public function testExample()
    {
        $user = new User([
            'name'=>'asdTest',
            'email'=>'asdTest@asd.asd',
            'password'=>'asdasdasd'
        ]);
        $user->save();
        $usertest = User::where('name','asdTest')->first();
        $this->assertInstanceOf("App\User",$usertest);

    }
    public function testswapname()
    {
        User::where('name', 'asdTest')
            ->update(['name' => 'Steve Smith']);
        $this->assertDatabaseHas('users', [
            'name' => 'Steve Smith'
        ]);
    }

    public function testdeleteuser()
    {
        User::where('name', 'Steve Smith')
            ->delete();
        $this->assertDatabaseMissing('users', [
            'name' => 'Steve Smith'
        ]);
    }
}
