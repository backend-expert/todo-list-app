<?php

namespace Database\Factories;

use App\Tweets;
use Faker\Generator as Faker;

// use Illuminate\Database\Eloquent\Factories\Factory as factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todo>
 */
// class TodoFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     // public function definition()
//     // {
//     //     return [
//     //         //
//     //     ];
//     // }

// }

/** @var  \Illuminate\Database\Eloquent\Factory $factory */



$factory->define(TodoFactory::class, function (Faker $faker) {
    return [
        'label' => $faker->sentence(),
        // 'user_id' => $faker->numberBetween(1, 100)
    ];
});

/*
nova factores
namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var  string
     *
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return  array
     *
    public function definition()
    {
        return [
            'tweet' => $this->faker->text(140),
            'user_id' => $this->faker->numberBetween(1, 100)
        ];
    }
}

*/
