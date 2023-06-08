<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++) {
        $new_train = new Train();
        $new_train->id = $faker->randomNumber();
        $new_train->agency = $faker->word();
        $new_train->departure_station = $faker->word();
        $new_train->arrival_station = $faker->word();
        $new_train->departure_time = $faker->time();
        $new_train->time_of_arrival = $faker->time();
        $new_train->code = $faker->unique()->randomNumber();
        $new_train->carriage_number = $faker->unique()->randomNumber();
        $new_train->in_time = $faker->boolean();
        $new_train->deleted = $faker->boolean();
        $new_train->save();
      }
    }
}
