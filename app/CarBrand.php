<?php


namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CarBrand extends Model
{
    use Notifiable;


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
