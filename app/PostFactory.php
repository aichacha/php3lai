<?php

namespace App\Post;

use Illuminate\Database\Eloquent\Model;

$factory->define(Model::class, function (Faker $faker){
  return [
     'content' => $faker->sentence(),
     'user_id' => $faker->randomDigit(),



  ];

});