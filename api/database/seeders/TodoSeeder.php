<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Seeder\factory;


// namespace Database\Factories;

use App\Models\User;
use Faker\Generator as Faker;

// namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function($user){
            $user->todos()->saveMany(
                Factory::factory(\App\Todo::class, 11)->make()
            )->each(function($todo){
                $todo->tasks->saveMany(
                    \App\Fakery\FakeTodoTask::factory(11)->make()
                );
            });

        });
    }
}
