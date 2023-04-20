<?php


namespace Database\Factories;

use App\Tweets;
use Faker\Generator as Faker;

// namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/*
*
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TodoTask>
 *
class TodoTaskFactory extends Factory
{
    **
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
    public function definition()
    {
        return [

        ];
    }
}
*/

/** @var  \Illuminate\Database\Eloquent\Factory $factory */



$factory->define(TodoTask::class, function (Faker $faker) {
    return [
        'label' => $faker->sentence(),
        // 'user_id' => $faker->numberBetween(1, 100)
        'is_complete'=> $faker->boolean()
    ];
});
