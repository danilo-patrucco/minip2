<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarBrand extends Model
{
    use Notifiable;
    use RefreshDatabase;


    protected $fillable = [
        'make', 'model', 'year'
    ];


    protected $hidden = [
//
    ];


    protected $casts = [
        //
    ];

}
