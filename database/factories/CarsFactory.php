
<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CarBrand;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\CarBrand::class, function (Faker $faker) {
    $model = array ("super","notthatsuper","godhelpus");
    $makes = array("Ford","Toyota","Honda");
    return [
        'make' => $makes[random_int(0,2)],
        'model' => $model[random_int(0,2)],
        'year' => random_int(1999,2005),
    ];
});
